<x-card>
    <x-card.header>
        <x-card.title>report an issue</x-card.title>
        <x-card.description>
            what area are you having problems with?
        </x-card.description>
    </x-card.header>
    <x-card.content>
        <x-form
            class="grid gap-6"
            id="report-issue"
        >
            <div class="grid gap-4 sm:grid-cols-2">
                <div class="grid gap-2">
                    <x-form.field name="area">
                        <x-form.label>area</x-form.label>
                        <x-select ::id="$id('form-field')">
                            <option value="team">team</option>
                            <option
                                value="billing"
                                selected
                            >billing</option>
                            <option value="account">account</option>
                            <option value="deployments">deployments</option>
                            <option value="support">support</option>
                        </x-select>
                        <x-form.description>your description here</x-form.description>
                        <x-form.message />
                    </x-form.field>
                </div>
                <x-form.field>
                    <div class="grid gap-2">
                        <x-form.label>security level</x-form.label>
                        <x-select
                            ::id="$id('form-field')"
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
                    </div>
                </x-form.field>
            </div>

            <x-form.field>
                <div class="grid gap-2">
                    <x-label htmlFor="subject">subject</x-label>
                    <x-input
                        id="subject"
                        placeholder="i need help with..."
                    />
                </div>
            </x-form.field>

            <x-form.field>
                <div class="grid gap-2">
                    <x-label htmlFor="description">description</x-label>
                    <x-textarea
                        id="description"
                        placeholder="please include all information relevant to your issue."
                    ></x-textarea>
                </div>
            </x-form.field>
        </x-form>
    </x-card.content>

    <x-card.footer class="justify-between space-x-2">
        <x-button variant="ghost">cancel</x-button>
        <x-button
            type="submit"
            form="report-issue"
        >submit</x-button>
    </x-card.footer>
</x-card>
