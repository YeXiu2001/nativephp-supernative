<native:column fill center class="w-full safe-area p-4 bg-theme-background">
    <native:scroll-view class="w-full">
        <native:column center class="w-full py-4">
            <native:column center class="w-full p-3 bg-theme-surface rounded-2xl shadow-md">
                <native:image
                    src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/GlenzRubyStore_logo.png'))) }}"
                    alt="Glenz Ruby Store Logo" class="w-40 h-40 object-contain self-center" />
                <native:text :font-weight="8" class="text-2xl mb-4 text-blue-900">GLENZRUBY STORE</native:text>

                @if(!empty($generalError))
                    <native:column class="w-full p-3 mb-3 bg-red-100 dark:bg-red-900/30 rounded-xl border border-red-400">
                        <native:text class="text-red-600 dark:text-red-400 text-sm font-medium">
                            {{ $generalError }}
                        </native:text>
                    </native:column>
                @endif

                <native:outlined-text-input size="sm" label="Username" native:model.blur="username"
                    leading-icon="person" class="w-full mb-3 text-theme-on-surface"
                    :is-error="!empty($usernameError)" :supporting="$usernameError" />

                <native:outlined-text-input size="sm" label="Password" native:model.blur="password"
                    leading-icon="lock" class="w-full mb-4" secure
                    :is-error="!empty($passwordError)" :supporting="$passwordError" />

                <native:button label="Login" icon="login" size="lg" @press="verify" class="w-full"
                    loading="{{ $isLoading }}" />
            </native:column>
        </native:column>
    </native:scroll-view>
</native:column>
