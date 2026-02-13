# About Turbine UI

Turbine UI is a Laravel Blade & Tailwind CSS UI component library that helps you build elegant and responsive user interfaces that'll make your pages pop. Say goodbye to designer's block forever.

# Release Notes

## v2.1.1

### Added
- `x-t-alert` now supports a `titleLevel` prop to control semantic heading level (`1-6`).

### Fixed
- Turbine UI script directive now uses a host-relative path for improved environment compatibility.
- Accessibility improvements for interactive controls:
  - Added explicit accessible labels and button types for dismiss controls in alert, toast, modal, and sidebar.
  - Added an accessible name/title for the theme switcher trigger button.
- Improved list-group semantics for better accessibility in common usage patterns.

### Upgrade steps

After upgrading, republish JS assets and clear caches:

```
php artisan vendor:publish --tag=turbine-ui-js --force
php artisan optimize:clear
```

# Documentation

## Download

Turbine UI is free and can be downloaded via composer:

```
composer require brandymedia/turbine-ui-core
```

## Installation

#### Requirements

- **MUST** be using at least Laravel 10
- **MUST** be using at least PHP 8.1
- **MUST** be using Tailwind CSS

### Tailwind CSS Setup

Once you've installed Turbine UI you'll need to update your **tailwind.config.js** file.

In the 'content' section, add **./vendor/brandymedia/turbine-ui-core/**/*.php** as a new line:

```
content: [
    '...',
    './vendor/brandymedia/turbine-ui-core/**/*.php',
],
```

You'll also need to make sure you're using the Tailwind Forms plugin in your **tailwind.config.js** file. This is normally included by default when using a starter kit such as Laravel Breeze.

```
import forms from '@tailwindcss/forms';

export default {
    ...
    plugins: [forms],
};
```

Then in development run:

```
npm run dev
```

Or in production run:

```
npm run build
```

### Themes

Turbine UI comes with 2 themes by default with further themes in development:

- Kinetic (default)
- Primal (Pro)

You can switch themes by adding the **TURBINE_UI_THEME** key to your .env file:

```
TURBINE_UI_THEME=kinetic|primal
```

You can also edit themes by publishing the packages assets:

```
php artisan vendor:publish --tag=turbine-ui-themes
```

This makes local copies of the themes in the **./resources/views/vendor/turbine-ui/themes** directory which can then be edited to meet your requirements.

> [!NOTE]  
> To use local themes, you will need to update your **tailwind.config.js** file.

In the 'content' section, add **./resources/views/**/*.php** as a new line:

```
content: [
    '...',
    './resources/views/**/*.php',
],
```

### Variants

Think of variants as colour palettes. The default themes already come with several predefined variants but you can create your own, or even overwrite existing one.

To create a new variant, run the following command in your CLI:

```
php artisan turbine:create-variant
```

You will then be prompted to enter the variants name. **To overwrite an existing theme level variant, use the same name for example ___primary___**.

Once the new variant has been created you will find it here **../resources/views/vendor/turbine-ui/variants**.

> [!NOTE]  
> To use local variants, you will need to update your **tailwind.config.js** file.

In the 'content' section, add **./resources/views/**/*.php** as a new line:

```
content: [
    '...',
    './resources/views/**/*.php',
],
```

You can now use your new variant on your components using kebab-case formatting.

### JavaScript

> [!NOTE]  
> Some of the Turbine UI components require JavaScript to function properly.

You'll need to first publish the js files:

```
php artisan vendor:publish --tag=turbine-ui-js --force
```

Then add the Turbine UI blade directive to your head:

```
@turbineUI
```

If you update Turbine UI and interactive components appear stale, clear cached files:

```
php artisan optimize:clear
```

### Alert title heading level

You can control alert title heading semantics with `titleLevel`:

```
<x-t-alert title="Important update" titleLevel="2" variant="brand">
    This alert keeps heading hierarchy consistent with your page structure.
</x-t-alert>
```

### Components

You can view the documentation for each of the components [here](https://turbineui.com/components)
