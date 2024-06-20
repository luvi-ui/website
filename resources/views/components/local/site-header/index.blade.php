  <header
      class="sticky top-0 z-50 w-full border-b border-border/40 bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60"
  >
      <div class="container flex items-center h-14 max-w-screen-2xl">
          <x-local.main-nav />
          <x-local.mobile-nav class="flex lg:hidden" />
          <div class="flex items-center justify-between flex-1 space-x-2 md:justify-end">
              <nav class="flex items-center">
                  <a
                      href="https://github.com/luvi-ui/laravel-luvi"
                      target="_blank"
                      rel="noreferrer"
                  >
                      <x-button variant="ghost">
                          <x-lucide-github class="size-4" />
                          <span class="sr-only">GitHub</span>
                      </x-button>
                  </a>
              </nav>
          </div>
      </div>
  </header>
