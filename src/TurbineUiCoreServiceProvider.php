<?php

namespace Brandymedia\TurbineUiCore;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Brandymedia\TurbineUiCore\View\Components\Alert;
use Brandymedia\TurbineUiCore\View\Components\Avatar;
use Brandymedia\TurbineUiCore\View\Components\Badge;
use Brandymedia\TurbineUiCore\View\Components\Burger;
use Brandymedia\TurbineUiCore\View\Components\Button;
use Brandymedia\TurbineUiCore\View\Components\ButtonGroup;
use Brandymedia\TurbineUiCore\View\Components\Card;
use Brandymedia\TurbineUiCore\View\Components\Code;
use Brandymedia\TurbineUiCore\View\Components\Combine;
use Brandymedia\TurbineUiCore\View\Components\Container;
use Brandymedia\TurbineUiCore\View\Components\Dropdown;
use Brandymedia\TurbineUiCore\View\Components\Grid;
use Brandymedia\TurbineUiCore\View\Components\Heading;
use Brandymedia\TurbineUiCore\View\Components\Input;
use Brandymedia\TurbineUiCore\View\Components\InputGroup;
use Brandymedia\TurbineUiCore\View\Components\Label;
use Brandymedia\TurbineUiCore\View\Components\Link;
use Brandymedia\TurbineUiCore\View\Components\ListGroup;
use Brandymedia\TurbineUiCore\View\Components\Media;
use Brandymedia\TurbineUiCore\View\Components\Menu;
use Brandymedia\TurbineUiCore\View\Components\Modal;
use Brandymedia\TurbineUiCore\View\Components\Navbar;
use Brandymedia\TurbineUiCore\View\Components\NavLink;
use Brandymedia\TurbineUiCore\View\Components\Progress;
use Brandymedia\TurbineUiCore\View\Components\Section;
use Brandymedia\TurbineUiCore\View\Components\Select;
use Brandymedia\TurbineUiCore\View\Components\Sidebar;
use Brandymedia\TurbineUiCore\View\Components\Stat;
use Brandymedia\TurbineUiCore\View\Components\Switcher;
use Brandymedia\TurbineUiCore\View\Components\Table;
use Brandymedia\TurbineUiCore\View\Components\Text;
use Brandymedia\TurbineUiCore\View\Components\Textarea;
use Brandymedia\TurbineUiCore\View\Components\Toast;
use Brandymedia\TurbineUiCore\Console\CreateVariant;

class TurbineUiCoreServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/turbine.php', 'turbine'
        );

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'turbine-ui');

        $viewComponents = [
            Alert::class,
            Avatar::class,
            Badge::class,
            Burger::class,
            Button::class,
            ButtonGroup::class,
            Card::class,
            Code::class,
            Combine::class,
            Container::class,
            Dropdown::class,
            Grid::class,
            Heading::class,
            Input::class,
            InputGroup::class,
            Label::class,
            Link::class,
            ListGroup::class,
            Media::class,
            Menu::class,
            Modal::class,
            Navbar::class,
            NavLink::class,
            Progress::class,
            Section::class,
            Select::class,
            Sidebar::class,
            Stat::class,
            Switcher::class,
            Table::class,
            Text::class,
            Textarea::class,
            Toast::class,
        ];

        $this->loadViewComponentsAs('turbine-ui', $viewComponents);
        $this->loadViewComponentsAs('t', $viewComponents);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views/themes/' => $this->app->resourcePath('views/vendor/turbine-ui/themes')
            ], 'turbine-ui-themes');
            $this->publishes([
                __DIR__.'/../resources/js/' => public_path('storage/vendor/turbine-ui/')
            ], 'turbine-ui-js');
            $this->commands([
                CreateVariant::class,
            ]);
        }

        Blade::directive('turbineUI', function () {
            return '<script defer src="'.asset('storage/vendor/turbine-ui/turbine-ui.js').'"></script>';
        });
    }

    public function register()
    {
        
    }
}