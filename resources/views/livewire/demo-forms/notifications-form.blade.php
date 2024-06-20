<div>
    <x-form>
        <div class="space-y-3">
            <p class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                Notify me about...
            </p>
            <div class="mt-8">
                @foreach ($notifications as $noiseAmount)
                    <label class="space-x-1">
                        <input
                            type="radio"
                            value="{{ $noiseAmount['value'] }}"
                            @input="showMe = '{{ $noiseAmount['label'] }}'"
                            x-model="$wire.noiseAmount"
                        >
                        <span>{{ $noiseAmount['label'] }}</span>
                    </label>
                    <br>
                @endforeach
            </div>
        </div>

        {{-- email notifications --}}
        <div>
            <div
                x-data="{
                    showMe: [],
                    addIfMissing(newItem) {
                        const index = this.showMe.indexOf(newItem);
                        return index === -1 ? this.showMe.push(newItem) : this.showMe.splice(index, 1);
                    }
                }"
                class="mt-8 space-y-4"
                @input="addIfMissing($event.target.dataset.label)"
            >
                @foreach ($emails as $email)
                    <x-card>
                        <x-card.header>
                            <div class="flex justify-between">
                                <div>
                                    <x-card.title>
                                        {{ $email['label'] }}
                                    </x-card.title>
                                    <x-card.description>
                                        {{ $email['subline'] }}
                                    </x-card.description>
                                </div>
                                <div>
                                    <x-switch
                                        name="emails"
                                        value="{{ $email['value'] }}"
                                        data-label="{{ $email['label'] }}"
                                        x-model="$wire.emailNotifications"
                                    />
                                </div>
                            </div>
                        </x-card.header>
                    </x-card>
                @endforeach
            </div>
        </div>

        <x-button type="submit">Update preferences</x-button>
    </x-form>
</div>
