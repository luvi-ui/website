    <x-card>
        <x-card.content class="pt-6">
            <div class="space-y-2">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <x-label
                            htmlFor="start-date"
                            class="shrink-0"
                        >
                            start date
                        </x-label>
                        <x-input
                            type="date"
                            id="start-date"
                            name="start-date"
                            value="2023-03-22"
                        />
                    </div>

                    <div>
                        <x-label
                            htmlFor="end-date"
                            class="shrink-0"
                        >
                            end date
                        </x-label>
                        <x-input
                            type="date"
                            id="end-date"
                            name="end-date"
                        />
                    </div>

                </div>

                <!-- <datepickerwithrange class="[&>button]:w-[260px]" /> -->
            </div>
        </x-card.content>
    </x-card>
