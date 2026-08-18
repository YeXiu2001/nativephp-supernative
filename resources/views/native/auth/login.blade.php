<native:column fill center class="w-full safe-area p-4 bg-theme-background">
    <native:scroll-view class="w-full">
        <native:column center class="w-full p-6 bg-slate-200 rounded-2xl">
            <native:image
                src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/GlenzRubyStore_logo.png'))) }}"
                alt="Glenz Ruby Store Logo" class="w-40 h-40 object-contain self-center" />
            <native:text :font-weight="8" class="text-2xl mb-2 text-blue-900">GLENZRUBY STORE</native:text>
            <native:outlined-text-input size="sm" label="Username" native:model.blur="username" leading-icon="person"
                class="w-full text-theme-on-surface" />
            <native:outlined-text-input size="sm" label="Password" native:model.blur="password" leading-icon="lock"
                class="w-full mb-3" />
            <native:button label="Login" icon="login" size="md" @press="verify" class="w-full" />
        </native:column>
    </native:scroll-view>
</native:column>
