<div>
    <x-form>
        <x-form.item name="font">
            <x-form.label>Font</x-form.label>
            <x-select
                x-form:control
                class="w-[200px]"
            >
                <option
                    value=""
                    disabled
                >
                    Select a font</option>
                <option value="inter">Inter</option>
                <option value="manrope">Manrope</option>
                <option value="system">System</option>
            </x-select>
            <x-form.description>
                Set the font you want to use in the dashboard.
            </x-form.description>
            <x-form.message />
        </x-form.item>

        <x-form.item name="theme">
            <x-form.label>Theme</x-form.label>
            <x-form.description>
                Select the theme for the dashboard.
            </x-form.description>

            <div x-data="{ theme: 'dark' }">
                <x-radio-group
                    name="style"
                    x-model="theme"
                    class="max-w-md grid grid-cols-2 gap-8"
                >
                    <div class="space-y-2">
                        <x-radio-group.item
                            value="light"
                            id="light"
                            class="peer sr-only"
                        />
                        <x-label
                            htmlFor="light"
                            class="flex flex-col rounded-md border-2 border-transparent peer-checked:border-primary"
                        >
                            <div class="items-center rounded-md border-2 border-muted p-1 hover:border-accent">
                                <div class="space-y-2 rounded-sm bg-[#ecedef] p-2">
                                    <div class="space-y-2 rounded-md bg-white p-2 shadow-sm">
                                        <div class="h-2 w-[80px] rounded-lg bg-[#ecedef]"></div>
                                        <div class="h-2 w-[100px] rounded-lg bg-[#ecedef]"></div>
                                    </div>
                                    <div class="flex items-center space-x-2 rounded-md bg-white p-2 shadow-sm">
                                        <div class="h-4 w-4 rounded-full bg-[#ecedef]"></div>
                                        <div class="h-2 w-[100px] rounded-lg bg-[#ecedef]"></div>
                                    </div>
                                    <div class="flex items-center space-x-2 rounded-md bg-white p-2 shadow-sm">
                                        <div class="h-4 w-4 rounded-full bg-[#ecedef]"></div>
                                        <div class="h-2 w-[100px] rounded-lg bg-[#ecedef]"></div>
                                    </div>
                                </div>
                            </div>
                        </x-label>
                        <x-label
                            htmlFor="light"
                            class="flex justify-center font-normal"
                        >
                            Light
                        </x-label>
                    </div>
                    <div class="space-y-2">
                        <x-radio-group.item
                            value="dark"
                            id="dark"
                            class="peer sr-only"
                        />
                        <x-label
                            htmlFor="dark"
                            class="flex flex-col rounded-md border-2 border-transparent peer-checked:border-primary"
                        >
                            <div
                                class="items-center rounded-md border-2 border-muted bg-popover p-1 hover:bg-accent hover:text-accent-foreground">
                                <div class="space-y-2 rounded-sm bg-slate-950 p-2">
                                    <div class="space-y-2 rounded-md bg-slate-800 p-2 shadow-sm">
                                        <div class="h-2 w-[80px] rounded-lg bg-slate-400"></div>
                                        <div class="h-2 w-[100px] rounded-lg bg-slate-400"></div>
                                    </div>
                                    <div class="flex items-center space-x-2 rounded-md bg-slate-800 p-2 shadow-sm">
                                        <div class="h-4 w-4 rounded-full bg-slate-400"></div>
                                        <div class="h-2 w-[100px] rounded-lg bg-slate-400"></div>
                                    </div>
                                    <div class="flex items-center space-x-2 rounded-md bg-slate-800 p-2 shadow-sm">
                                        <div class="h-4 w-4 rounded-full bg-slate-400"></div>
                                        <div class="h-2 w-[100px] rounded-lg bg-slate-400"></div>
                                    </div>
                                </div>
                            </div>
                        </x-label>
                        <x-label
                            htmlFor="dark"
                            class="flex justify-center font-normal"
                        >
                            Dark
                        </x-label>
                    </div>
                </x-radio-group>
            </div>

            <x-form.message />
        </x-form.item>

        <x-button type="submit">Update preferences</x-button>
    </x-form>
</div>
