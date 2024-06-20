<x-card>
    <x-card.header>
        <x-card.title>report an issue</x-card.title>
        <x-card.description>
            what area are you having problems with?
        </x-card.description>
    </x-card.header>
    <x-card.content>
        <form x-form
            wire:submit="save"
            class="grid gap-6"
            id="report-issue"
        >
            <div class="grid gap-4 sm:grid-cols-2">
                <div class="grid gap-2">
                    <x-form.item name="area">
                        <x-form.label>area</x-form.label>
                        <x-select
                            wire:model="area"
                            x-form:control
                        >
                            <option value="team">team</option>
                            <option
                                value="billing"
                                selected
                            >billing</option>
                            <option value="account">account</option>
                            <option value="deployments">deployments</option>
                            <option value="support">support</option>
                        </x-select>
                        <x-form.message />
                    </x-form.item>
                </div>
                <div class="grid gap-2">
                    <x-form.item>
                        <x-form.label>security level</x-form.label>
                        <x-select
                            x-form:control
                            name="security"
                        >
                            <option value="1">severity 1 (highest)</option>
                            <option
                                value="2"
                                selected
                            >severity 2</option>
                            <option value="3">severity 3</option>
                            <option value="4">severity 4 (lowest)</option>
                        </x-select>
                    </x-form.item>
                </div>
            </div>

            <x-form.item>
                <div class="grid gap-2">
                    <x-form.label >subject</x-form.label>
                    <x-input
                        x-form:control
                        id="subject"
                        placeholder="i need help with..."
                    />
                </div>
            </x-form.item>

            <div class="grid gap-2">
                <x-form.item>
                    <x-form.label >description</x-form.label>
                    <x-textarea
                        x-form:control
                        id="description"
                        placeholder="please include all information relevant to your issue."
                    ></x-textarea>
                </x-form.item>
            </div>
        </form>
    </x-card.content>

    <x-card.footer class="justify-between space-x-2">
        <x-button variant="ghost">cancel</x-button>
        <x-button
            type="submit"
            form="report-issue"
        >
            submit
        </x-button>
    </x-card.footer>
</x-card>
