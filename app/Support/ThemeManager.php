<?php

namespace App\Support;

use Native\Mobile\Facades\System;
use Native\Mobile\UI\Theme;

class ThemeManager
{
    /**
     * Get the current theme appearance mode ('light' or 'dark').
     */
    public static function currentMode(): string
    {
        return System::appearance();
    }

    /**
     * Explicitly set the theme mode ('light' or 'dark').
     *
     * In light mode, runtime dark tokens are dynamically set to match light
     * tokens to override OS system dark theme defaults. In dark mode, original
     * dark tokens from config('native-ui.theme.dark') are restored.
     */
    public static function setMode(string $mode): string
    {
        $mode = strtolower($mode) === 'dark' ? 'dark' : 'light';
        System::rememberAppearance($mode);

        if ($mode === 'light') {
            Theme::merge([
                'dark' => config('native-ui.theme.light'),
            ]);
        } else {
            Theme::merge([
                'dark' => config('native-ui.theme.dark'),
            ]);
        }

        return System::appearance();
    }

    /**
     * Toggle between light and dark theme modes.
     */
    public static function toggle(): string
    {
        $newMode = System::isDarkMode() ? 'light' : 'dark';

        return static::setMode($newMode);
    }
}
