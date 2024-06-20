<x-card>
    <x-card.header class="grid grid-cols-[1fr_110px] items-start gap-4 space-y-0">
        <div class="space-y-1">
            <x-card.title>shadcn/ui</x-card.title>
            <x-card.description>
                beautifully designed components that you can copy and paste into
                your apps. accessible. customizable. open source.
            </x-card.description>
        </div>
        <div class="flex items-center space-x-1 rounded-md bg-secondary text-secondary-foreground">
            <x-button
                variant="secondary"
                class="shadow-none"
            >
                <x-lucide-star class="w-4 h-4 mr-2" />
                star
            </x-button>
            <!-- <separator -->
            <!--     orientation="vertical" -->
            <!--     class="h-[20px]" -->
            <!-- /> -->
            <!-- <dropdownmenu> -->
            <!--     <dropdownmenutrigger aschild> -->
            <!--         <button -->
            <!--             variant="secondary" -->
            <!--             class="px-2 shadow-none" -->
            <!--         > -->
            <!--             <chevrondownicon class="w-4 h-4 text-secondary-foreground" /> -->
            <!--         </button> -->
            <!--     </dropdownmenutrigger> -->
            <!--     <dropdownmenucontent -->
            <!--         align="end" -->
            <!--         alignoffset={-5} -->
            <!--         class="w-[200px]" -->
            <!--         forcemount -->
            <!--     > -->
            <!--         <dropdownmenulabel>suggested lists</dropdownmenulabel> -->
            <!--         <dropdownmenuseparator /> -->
            <!--         <dropdownmenucheckboxitem checked> -->
            <!--             future ideas -->
            <!--         </dropdownmenucheckboxitem> -->
            <!--         <dropdownmenucheckboxitem>my stack</dropdownmenucheckboxitem> -->
            <!--         <dropdownmenucheckboxitem>inspiration</dropdownmenucheckboxitem> -->
            <!--         <dropdownmenuseparator /> -->
            <!--         <dropdownmenuitem> -->
            <!--             <plusicon class="w-4 h-4 mr-2" /> create list -->
            <!--         </dropdownmenuitem> -->
            <!--     </dropdownmenucontent> -->
            <!-- </dropdownmenu> -->
        </div>
    </x-card.header>
    <x-card.content>
        <div class="flex space-x-4 text-sm text-muted-foreground">
            <div class="flex items-center">
                <x-lucide-circle class="w-3 h-3 mr-1 fill-sky-400 text-sky-400" />
                TypeScript
            </div>
            <div class="flex items-center">
                <x-lucide-star class="w-3 h-3 mr-1" />
                20k
            </div>
            <div>updated april 2023</div>
        </div>
    </x-card.content>
</x-card>
