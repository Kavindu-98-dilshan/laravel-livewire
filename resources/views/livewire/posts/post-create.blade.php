<section xmlns:flux="http://www.w3.org/1999/xhtml">
    <form wire:submit="savePost" class="max-w-md mx-auto flex flex-col gap-6 bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
        <!-- Title -->
        <flux:input
            wire:model="form.title"
            label="Title"
            type="text"
            autofocus
            autocomplete="email"
            placeholder="Title"
        />

        <!-- Image -->
        <flux:input
            wire:model="form.image"
            label="Image"
            type="file"
        />

        <div>
            @if ($form->image)
                <img src="{{ $form->image->temporaryUrl() }}" alt="image" class="w-12 h-12 rounded-2xl">
            @endif
        </div>

        <!-- Content -->
        <flux:textarea
            wire:model="form.content"
            label="Content"
            placeholder="Content"
        />
        
        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full">Create</flux:button>
        </div>
    </form>
</section>
