<div>
    <!-- Display Success Message -->
    @if (session()->has('message'))
        <div class="alert">
            {{ session('message') }}
        </div>
    @endif

    <!-- Item Creation Form -->
    <form wire:submit.prevent="store">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" wire:model="name" placeholder="Enter item name">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" wire:model="description" placeholder="Enter item description"></textarea>
            @error('description') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Save</button>
    </form>

    <!-- Display List of Items -->
    @if ($items->count())
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td class="actions">
                            <button wire:click="edit({{ $item->id }})">Edit</button>
                            <button wire:click="delete({{ $item->id }})">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="no-items">No items found.</p>
    @endif

    <!-- Item Update Form (when editing an item) -->
    @if ($updateMode)
        <form wire:submit.prevent="update">
            <input type="hidden" wire:model="itemId">

            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" wire:model="name" placeholder="Enter updated name">
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="description">Description:</label>
                <textarea id="description" wire:model="description" placeholder="Enter updated description"></textarea>
                @error('description') <span class="error">{{ $message }}</span> @enderror
            </div>

            <button type="submit">Update</button>
        </form>
    @endif
</div>
