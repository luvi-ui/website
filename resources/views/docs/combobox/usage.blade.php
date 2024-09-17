@use('App\Models\<YourModel>')

<livewire:ui.combobox
    :model="<YourModel>::class"
    :searchable="['name']"
    display="name"
    placeholder="Search..."
/>
