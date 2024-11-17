<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Item;

class ItemManager extends Component
{
    // Public properties
    public $name, $description, $itemId, $updateMode = false, $items;
    protected $layout = 'layouts.app';

    // Render the component
    public function render()
    {
        return view('livewire.item-manager')->layout('layouts.app');
    }

    // Store new item
    public function store()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Item::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Item Created Successfully.');
        $this->resetInputFields();
    }

    // Reset input fields after create/update
    private function resetInputFields()
    {
        $this->name = '';
        $this->description = '';
        $this->itemId = '';

        $this->render();
    }

    // Mount method to load the items when the component is initialized
    public function mount()
    {
        $this->items = Item::all();
    }

    // Edit item
    public function edit($id)
    {
        $item = Item::findOrFail($id);
        $this->itemId = $id;
        $this->name = $item->name;
        $this->description = $item->description;
        $this->updateMode = true;
    }

    // Update existing item
    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $item = Item::find($this->itemId);
        $item->update([
            'name' => $this->name,
            'description' => $this->description,
        ]);

        $this->updateMode = false;
        session()->flash('message', 'Item Updated Successfully.');
        $this->resetInputFields();
    }

    // Delete item
    public function delete($id)
    {
        Item::destroy($id);
        session()->flash('message', 'Item Deleted Successfully.');
    }
}
