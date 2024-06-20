<div class="space-x-16 space-y-16">
    <x-boom disabled />

    <div>
        <x-button
            variant="ghost"
            @click="Toaster.error(`<section><div class='text-sm font-semibold [&amp;+div]:text-xs' >Scheduled: Catch up </div> <div class='text-sm opacity-90'>Friday, February 10, 2023 at 5:57 PM</div></section>`)"
        >
            toasty toast
        </x-button>
    </div>

    <x-menubar>
        <x-menubar.menu>
            <x-menubar.trigger>file</x-menubar.trigger>
            <x-menubar.content>
                <x-menubar.item>
                    new tab <x-menubar.shortcut>⌘t</x-menubar.shortcut>
                </x-menubar.item>
                <x-menubar.item>
                    new window <x-menubar.shortcut>⌘n</x-menubar.shortcut>
                </x-menubar.item>
                <x-menubar.item disabled>new incognito window</x-menubar.item>
                <x-menubar.separator />
                <x-menubar.sub>
                    <x-menubar.sub.trigger>share</x-menubar.sub.trigger>
                    <x-menubar.sub.content>
                        <x-menubar.item>email link</x-menubar.item>
                        <x-menubar.item>messages</x-menubar.item>
                        <x-menubar.item>notes</x-menubar.item>
                    </x-menubar.sub.content>
                </x-menubar.sub>
                <x-menubar.separator />
                <x-menubar.item>
                    print... <x-menubar.shortcut>⌘p</x-menubar.shortcut>
                </x-menubar.item>
            </x-menubar.content>
        </x-menubar.menu>
        <x-menubar.menu>
            <x-menubar.trigger>edit</x-menubar.trigger>
            <x-menubar.content>
                <x-menubar.item>
                    undo <x-menubar.shortcut>⌘z</x-menubar.shortcut>
                </x-menubar.item>
                <x-menubar.item>
                    redo <x-menubar.shortcut>⇧⌘z</x-menubar.shortcut>
                </x-menubar.item>
                <x-menubar.separator />
                <x-menubar.sub>
                    <x-menubar.sub.trigger>find</x-menubar.sub.trigger>
                    <x-menubar.sub.content>
                        <x-menubar.item>search the web</x-menubar.item>
                        <x-menubar.separator />
                        <x-menubar.item>find...</x-menubar.item>
                        <x-menubar.item>find next</x-menubar.item>
                        <x-menubar.item>find previous</x-menubar.item>
                    </x-menubar.sub.content>
                </x-menubar.sub>
                <x-menubar.separator />
                <x-menubar.item>cut</x-menubar.item>
                <x-menubar.item>copy</x-menubar.item>
                <x-menubar.item>paste</x-menubar.item>
            </x-menubar.content>
        </x-menubar.menu>
        <x-menubar.menu>
            <x-menubar.trigger>view</x-menubar.trigger>
            <x-menubar.content>
                <x-menubar.checkboxitem>always show bookmarks bar</x-menubar.checkboxitem>
                <x-menubar.checkboxitem checked>
                    always show full urls
                </x-menubar.checkboxitem>
                <x-menubar.separator />
                <x-menubar.item inset>
                    reload <x-menubar.shortcut>⌘r</x-menubar.shortcut>
                </x-menubar.item>
                <x-menubar.item
                    disabled
                    inset
                >
                    force reload <x-menubar.shortcut>⇧⌘r</x-menubar.shortcut>
                </x-menubar.item>
                <x-menubar.separator />
                <x-menubar.item inset>toggle fullscreen</x-menubar.item>
                <x-menubar.separator />
                <x-menubar.item inset>hide sidebar</x-menubar.item>
            </x-menubar.content>
        </x-menubar.menu>
        <x-menubar.menu>
            <x-menubar.trigger>profiles</x-menubar.trigger>
            <x-menubar.content>
                <x-menubar.radioitemgroup value="benoit">
                    <x-menubar.radioitem value="andy">andy</x-menubar.radioitem>
                    <x-menubar.radioitem value="benoit">benoit</x-menubar.radioitem>
                    <x-menubar.radioitem value="luis">luis</x-menubar.radioitem>
                </x-menubar.radioitemgroup>
                <x-menubar.separator />
                <x-menubar.item inset>edit...</x-menubar.item>
                <x-menubar.separator />
                <x-menubar.item inset>add profile...</x-menubar.item>
            </x-menubar.content>
        </x-menubar.menu>
    </x-menubar>


    <x-menubar>
        <x-menubar.menu>
            <x-menubar.trigger variant="outline">
                Menubar
            </x-menubar.trigger>
            <x-menubar.content class="w-56">
                <x-menubar.label inset>My Account</x-menubar.label>
                <x-menubar.separator />
                <x-menubar.radioitemgroup default-value="check2">
                    <x-menubar.radioitem value="check1">
                        radio1
                    </x-menubar.radioitem>
                    <x-menubar.radioitem value="check2">
                        radio2
                    </x-menubar.radioitem>
                </x-menubar.radioitemgroup>
                <x-menubar.group>
                    <x-menubar.item inset>
                        Profile
                        <x-menubar.shortcut>⇧⌘P</x-menubar.shortcut>
                    </x-menubar.item>
                    <x-menubar.checkboxitem value="check1">
                        checkbox1
                    </x-menubar.checkboxitem>
                    <x-menubar.checkboxitem value="check2">
                        checkbox2
                    </x-menubar.checkboxitem>
                    <x-menubar.item inset>
                        Prada
                        <x-menubar.shortcut>⇧⌘P</x-menubar.shortcut>
                    </x-menubar.item>
                    <x-menubar.item inset>
                        Pokemon
                        <x-menubar.shortcut>⇧⌘P</x-menubar.shortcut>
                    </x-menubar.item>
                    <x-menubar.sub>
                        <x-menubar.sub.trigger inset>Invite users</x-menubar.sub.trigger>
                        <x-menubar.sub.content>
                            <x-menubar.item>Email</x-menubar.item>
                            <x-menubar.item>Message</x-menubar.item>
                            <x-menubar.separator />
                            <x-menubar.item>More...</x-menubar.item>
                            <x-menubar.sub>
                                <x-menubar.sub.trigger>Invite users</x-menubar.sub.trigger>
                                <x-menubar.sub.content>
                                    <x-menubar.item>Email</x-menubar.item>
                                    <x-menubar.item>Message</x-menubar.item>
                                    <x-menubar.separator />
                                    <x-menubar.item>More...</x-menubar.item>
                                </x-menubar.sub.content>
                            </x-menubar.sub>
                        </x-menubar.sub.content>
                    </x-menubar.sub>
                </x-menubar.group>
                <x-menubar.separator />
                <x-menubar.item inset>
                    Log out
                    <x-menubar.shortcut>⇧⌘Q</x-menubar.shortcut>
                </x-menubar.item>
            </x-menubar.content>
        </x-menubar.menu>
        <x-menubar.menu>
            <x-menubar.trigger variant="outline">
                Menubar
            </x-menubar.trigger>
            <x-menubar.content class="w-56">
                <x-menubar.label inset>My Account</x-menubar.label>
                <x-menubar.separator />
                <x-menubar.radioitemgroup default-value="check2">
                    <x-menubar.radioitem value="check1">
                        radio1
                    </x-menubar.radioitem>
                    <x-menubar.radioitem value="check2">
                        radio2
                    </x-menubar.radioitem>
                </x-menubar.radioitemgroup>
                <x-menubar.group>
                    <x-menubar.item inset>
                        Profile
                        <x-menubar.shortcut>⇧⌘P</x-menubar.shortcut>
                    </x-menubar.item>
                    <x-menubar.checkboxitem value="check1">
                        checkbox1
                    </x-menubar.checkboxitem>
                    <x-menubar.checkboxitem value="check2">
                        checkbox2
                    </x-menubar.checkboxitem>
                    <x-menubar.item inset>
                        Prada
                        <x-menubar.shortcut>⇧⌘P</x-menubar.shortcut>
                    </x-menubar.item>
                    <x-menubar.item inset>
                        Pokemon
                        <x-menubar.shortcut>⇧⌘P</x-menubar.shortcut>
                    </x-menubar.item>
                    <x-menubar.sub>
                        <x-menubar.sub.trigger inset>Invite users</x-menubar.sub.trigger>
                        <x-menubar.sub.content>
                            <x-menubar.item>Email</x-menubar.item>
                            <x-menubar.item>Message</x-menubar.item>
                            <x-menubar.separator />
                            <x-menubar.item>More...</x-menubar.item>
                            <x-menubar.sub>
                                <x-menubar.sub.trigger>Invite users</x-menubar.sub.trigger>
                                <x-menubar.sub.content>
                                    <x-menubar.item>Email</x-menubar.item>
                                    <x-menubar.item>Message</x-menubar.item>
                                    <x-menubar.separator />
                                    <x-menubar.item>More...</x-menubar.item>
                                </x-menubar.sub.content>
                            </x-menubar.sub>
                        </x-menubar.sub.content>
                    </x-menubar.sub>
                </x-menubar.group>
                <x-menubar.separator />
                <x-menubar.item inset>
                    Log out
                    <x-menubar.shortcut>⇧⌘Q</x-menubar.shortcut>
                </x-menubar.item>
            </x-menubar.content>
        </x-menubar.menu>
    </x-menubar>




    <x-dropdown-menu>
        <x-dropdown-menu.trigger variant="outline">
            Open
        </x-dropdown-menu.trigger>
        <x-dropdown-menu.content class="w-56">
            <x-dropdown-menu.label inset>My Account</x-dropdown-menu.label>
            <x-dropdown-menu.separator />
            <x-dropdown-menu.radioitemgroup default-value="check2">
                <x-dropdown-menu.radioitem value="check1">
                    radio1
                </x-dropdown-menu.radioitem>
                <x-dropdown-menu.radioitem value="check2">
                    radio2
                </x-dropdown-menu.radioitem>
            </x-dropdown-menu.radioitemgroup>
            <x-dropdown-menu.group>
                <x-dropdown-menu.item inset>
                    Profile
                    <x-dropdown-menu.shortcut>⇧⌘P</x-dropdown-menu.shortcut>
                </x-dropdown-menu.item>
                <x-dropdown-menu.checkboxitem value="check1">
                    checkbox1
                </x-dropdown-menu.checkboxitem>
                <x-dropdown-menu.checkboxitem value="check2">
                    checkbox2
                </x-dropdown-menu.checkboxitem>
                <x-dropdown-menu.item inset>
                    Prada
                    <x-dropdown-menu.shortcut>⇧⌘P</x-dropdown-menu.shortcut>
                </x-dropdown-menu.item>
                <x-dropdown-menu.item inset>
                    Pokemon
                    <x-dropdown-menu.shortcut>⇧⌘P</x-dropdown-menu.shortcut>
                </x-dropdown-menu.item>
                <x-dropdown-menu.sub>
                    <x-dropdown-menu.sub.trigger inset>Invite users</x-dropdown-menu.sub.trigger>
                    <x-dropdown-menu.sub.content>
                        <x-dropdown-menu.item>Email</x-dropdown-menu.item>
                        <x-dropdown-menu.item>Message</x-dropdown-menu.item>
                        <x-dropdown-menu.separator />
                        <x-dropdown-menu.item>More...</x-dropdown-menu.item>
                        <x-dropdown-menu.sub>
                            <x-dropdown-menu.sub.trigger>Invite users</x-dropdown-menu.sub.trigger>
                            <x-dropdown-menu.sub.content>
                                <x-dropdown-menu.item>Email</x-dropdown-menu.item>
                                <x-dropdown-menu.item>Message</x-dropdown-menu.item>
                                <x-dropdown-menu.separator />
                                <x-dropdown-menu.item>More...</x-dropdown-menu.item>
                            </x-dropdown-menu.sub.content>
                        </x-dropdown-menu.sub>
                    </x-dropdown-menu.sub.content>
                </x-dropdown-menu.sub>
            </x-dropdown-menu.group>
            <x-dropdown-menu.separator />
            <x-dropdown-menu.item inset>
                Log out
                <x-dropdown-menu.shortcut>⇧⌘Q</x-dropdown-menu.shortcut>
            </x-dropdown-menu.item>
        </x-dropdown-menu.content>
    </x-dropdown-menu>

    <x-popover>
        <x-popover.trigger>
            <x-button variant="outline">Open</x-button>
        </x-popover.trigger>
        <x-popover.content class="w-56">
            <p>Hello</p>
        </x-popover.content>
    </x-popover>

    <x-hover-card>
        <x-hover-card.trigger>hover card (with delay)</x-hover-card.trigger>
        <x-hover-card.content>
            the react framework – created and maintained by @vercel.
        </x-hover-card.content>
    </x-hover-card>

    <div x-data="{ colors: ['red'] }">

        Colors: <span x-text="colors"></span>
    </div>

    <div x-data="{ colors: ['red'] }">
        <div
            x-data="{
                __options: [],
                __optionChanged(el) {
                    if (el.type === 'radio' && el.checked) this.__setOption(el);
                    else if (el.type === 'checkbox') el.checked ? this.__addOption(el) : this.__removeOption(el);
            
                },
                __addOption(el) {
                    this.__options.push(this.__getItemFromEl(el))
                },
                __removeOption(el) {
                    this.__options = this.__options.filter((option) => option.value != el.value);
                },
                __setOption(el) {
                    this.__options = [this.__getItemFromEl(el)];
                },
                __getItemFromEl(el) {
                    const label = Array.from(el.labels).find((label) => label.htmlFor === el.id)
                    return { value: el.value, label: label.innerHTML };
                }
            }"
            x-init="$nextTick(() => $el.querySelectorAll('input:checked').forEach((el) => __optionChanged(el)))"
            x-on:change="__optionChanged($event.target)"
        >
            <x-button
                variant="outline"
                class="w-[200px] justify-between"
            >
                <template x-for="option in __options">
                    <span x-html="option.label"></span>
                </template>
                <template x-if="__options.length === 0">
                    <span>Select a color...</span>
                </template>
                <x-lucide-caret-sort class="ml-2 h-4 w-4 shrink-0 opacity-50" />
            </x-button>

            <div class="flex flex-col w-[200px] mt-4 p-1 border rounded">
                <label
                    class="flex px-2 py-3 cursor-default select-none items-center rounded-sm text-sm outline-none hover:bg-accent hover:text-accent-foreground"
                >
                    <input
                        id="red"
                        type="checkbox"
                        value="red"
                        x-model="colors"
                        class="peer sr-only"
                    >
                    <x-lucide-check class="size-4 mr-2 invisible peer-checked:visible" />
                    <label for="red">
                        <div class="flex items-center">
                            <div class="bg-red-300 rounded size-6 mr-2"></div> red
                        </div>
                    </label>
                </label>
                <label
                    class="flex px-2 py-3 cursor-default select-none items-center rounded-sm text-sm outline-none hover:bg-accent hover:text-accent-foreground"
                >
                    <input
                        id="orange"
                        type="checkbox"
                        value="orange"
                        x-model="colors"
                        class="peer sr-only"
                    >
                    <x-lucide-check class="size-4 mr-2 invisible peer-checked:visible" />
                    <label for="orange">
                        <div class="flex items-center">
                            <div class="bg-orange-300 rounded size-6 mr-2"></div> orange
                        </div>
                    </label>
                </label>
                <label
                    class="flex px-2 py-3 cursor-default select-none items-center rounded-sm text-sm outline-none hover:bg-accent hover:text-accent-foreground"
                >
                    <input
                        id="yellow"
                        type="checkbox"
                        value="yellow"
                        x-model="colors"
                        class="peer sr-only"
                    >
                    <x-lucide-check class="size-4 mr-2 invisible peer-checked:visible" />
                    <label for="yellow">
                        <div class="flex items-center">
                            <div class="bg-yellow-300 rounded size-6 mr-2"></div> yellow
                        </div>
                    </label>
                </label>
            </div>
        </div>
    </div>




    <div x-searchable>
        <input x-searchable:input />
        <ul>
            <li x-searchable:item>Item 1</li>
            <li x-searchable:item>Item 2</li>
            <li x-searchable:item>Item 3</li>
            <li x-searchable:item>Item 4</li>
            <li x-searchable:item>Item 5</li>
            <li x-searchable:item>Item 6</li>
            <li x-searchable:item>Item 7</li>
        </ul>
    </div>

    <div>
        <x-dialog>
            <x-dialog.trigger>
                <x-button variant="outline">Edit Profile</x-button>
            </x-dialog.trigger>
            <x-dialog.content class="sm:max-w-[425px]">
                <x-dialog.header>
                    <x-dialog.title>Edit profile</x-dialog.title>
                    <x-dialog.description>
                        Make changes to your profile here. Click save when you're done.
                    </x-dialog.description>
                </x-dialog.header>
                <div class="grid gap-4 py-4">
                    <div class="grid grid-cols-4 items-center gap-4">
                        <x-label
                            htmlFor="name"
                            class="text-right"
                        >
                            Name
                        </x-label>
                        <x-input
                            id="name"
                            value="Pedro Duarte"
                            class="col-span-3"
                        />
                    </div>
                    <div class="grid grid-cols-4 items-center gap-4">
                        <x-label
                            htmlFor="username"
                            class="text-right"
                        >
                            Username
                        </x-label>
                        <x-input
                            id="username"
                            value="@peduarte"
                            class="col-span-3"
                        />
                    </div>
                </div>
                <x-dialog.footer>
                    <x-button type="submit">Save changes</x-button>
                </x-dialog.footer>
            </x-dialog.content>
        </x-dialog>
    </div>

    <div class="m-10">

        <x-form
            wire:submit="save"
            class="w-2/3 space-y-6"
        >
            <x-form.item
                class="space-y-3"
                name="notification"
            >
                <x-form.label>Notify me about...</x-form.label>
                <x-radio-group
                    x-form:control
                    name="notification"
                >
                    <x-form.item class="flex items-center space-x-3 space-y-0">
                        <x-radio-group.item
                            x-form:control
                            value="all"
                        />
                        <x-form.label class="font-normal">
                            All new messages
                        </x-form.label>
                    </x-form.item>
                    <x-form.item class="flex items-center space-x-3 space-y-0">
                        <x-radio-group.item
                            x-form:control
                            value="mentions"
                        />
                        <x-form.label class="font-normal">
                            Direct messages and mentions
                        </x-form.label>
                    </x-form.item>
                    <x-form.item class="flex items-center space-x-3 space-y-0">
                        <x-radio-group.item
                            x-form:control
                            value="none"
                        />
                        <x-form.label class="font-normal">Nothing</x-form.label>
                    </x-form.item>

                </x-radio-group>
                <x-form.description> We will notify around the world in no time</x-form.description>
                <x-form.message />
            </x-form.item>

            <x-button type="submit">Submit</x-button>
        </x-form>

        <form
            x-form
            class="w-2/3 space-y-6"
        >
            <div
                x-form:item
                class="space-y-3"
            >
                <label x-form:label>Notify me about...</label>
                <x-radio-group
                    x-form:control
                    name="notification"
                >
                    <div
                        x-form:item
                        class="flex items-center space-x-3 space-y-0"
                    >
                        <x-radio-group.item
                            x-form:control
                            value="all"
                        />
                        <label
                            x-form:label
                            class="font-normal"
                        >
                            All new messages
                        </label>
                    </div>
                    <div
                        x-form:item
                        class="flex items-center space-x-3 space-y-0"
                    >
                        <x-radio-group.item
                            x-form:control
                            value="mentions"
                        />
                        <label
                            x-form:label
                            class="font-normal"
                        >
                            Direct messages and mentions
                        </label>
                    </div>
                    <div
                        x-form:item
                        class="flex items-center space-x-3 space-y-0"
                    >
                        <x-radio-group.item
                            x-form:control
                            value="none"
                        />
                        <label
                            x-form:label
                            class="font-normal"
                        >Nothing</label>
                    </div>

                </x-radio-group>
            </div>

            <x-button type="submit">Submit</x-button>
        </form>
    </div>



</div>
