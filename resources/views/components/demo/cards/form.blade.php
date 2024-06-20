 <x-form>
     <x-form.field name="username">
         <x-form.label>Username</x-form.label>
         <x-form.control>
             <x-input wire:model="username" placeholder="shadcn" {{ $component->applyProps() }} />
         </x-form.control>
         <x-form.description>
             This is your public display name.
         </x-form.description>
         <x-form.message />
     </x-form.field>
 </x-form>