<?php

return [
    
    'meta' => [
        'name' => 'primal',
        'description' => 'Turbine UI Primal theme',
    ],

    'design' => [

        'variants' => [
            
            'default' => [
                'background' => 'bg-slate-50 dark:bg-slate-900',
                'text' => 'text-slate-600 dark:text-slate-400',
                'border' => 'border-slate-600 dark:border-slate-400',
                'shadow' => 'shadow-slate-600/100 dark:shadow-slate-700/100',
                'ring' => 'ring-slate-200 dark:ring-slate-700 ring-offset-slate-100 dark:ring-offset-slate-800',
                'hover' => 'hover:bg-slate-100 hover:from-slate-200 hover:to-slate-400 hover:dark:bg-slate-800 hover:from:dark:bg-slate-400 dark:hover:to-slate-600',
                'focus' => 'focus-within:border-slate-600 focus-within:border-8',
                'active' => 'bg-slate-100 from-slate-200 to-slate-400 dark:bg-slate-800 from:dark:bg-slate-400 dark:to-slate-600',
                'gradient' => 'bg-gradient-to-br from-slate-100 to-slate-300 text-slate-800 dark:from-slate-900 dark:to-slate-500 dark:text-slate-100',
                'divide' => 'divide-slate-600 dark:divide-slate-400',
            ],

            'dark' => [
                'background' => 'bg-slate-900',
                'text' => 'text-slate-400',
                'border' => 'border-slate-700',
                'shadow' => 'shadow-slate-900/10',
                'ring' => 'ring-slate-700 ring-offset-slate-800',
                'hover' => 'hover:bg-slate-800 hover:from-slate-400 hover:to-slate-700',
                'focus' => 'focus-within:border-slate-900 focus-within:border-2',
                'active' => 'bg-slate-800 from-slate-400 to-slate-700',
                'gradient' => 'bg-gradient-to-br from-slate-700 to-slate-400 text-slate-100',
                'divide' => 'divide-slate-700',
            ],

            'brand' => [
                'background' => 'bg-brand-50 dark:bg-brand-900',
                'text' => 'text-brand-600 dark:text-brand-400',
                'border' => 'border-brand-600 dark:border-brand-400',
                'shadow' => 'shadow-brand-600/100 dark:shadow-brand-700/100',
                'ring' => 'ring-brand-200 dark:ring-brand-700 ring-offset-brand-100 dark:ring-offset-brand-800',
                'hover' => 'hover:bg-brand-100 hover:from-brand-200 hover:to-brand-400 hover:dark:bg-brand-800 hover:from:dark:bg-brand-400 dark:hover:to-brand-600',
                'focus' => 'focus-within:border-brand-600 focus-within:border-8',
                'active' => 'bg-brand-100 from-brand-200 to-brand-400 dark:bg-brand-800 from:dark:bg-brand-400 dark:to-brand-600',
                'gradient' => 'bg-gradient-to-br from-brand-100 to-brand-300 text-brand-800 dark:from-brand-900 dark:to-brand-500 dark:text-brand-100',
                'divide' => 'divide-brand-600 dark:divide-brand-400',
            ],

            'primary' => [
                'background' => 'bg-cyan-50 dark:bg-cyan-900',
                'text' => 'text-cyan-600 dark:text-cyan-400',
                'border' => 'border-cyan-600 dark:border-cyan-400',
                'shadow' => 'shadow-cyan-600/100 dark:shadow-cyan-700/100',
                'ring' => 'ring-cyan-200 dark:ring-cyan-700 ring-offset-cyan-100 dark:ring-offset-cyan-800',
                'hover' => 'hover:bg-cyan-100 hover:from-cyan-200 hover:to-cyan-400 hover:dark:bg-cyan-800 hover:from:dark:bg-cyan-400 dark:hover:to-cyan-600',
                'focus' => 'focus-within:border-cyan-600 focus-within:border-8',
                'active' => 'bg-cyan-100 from-cyan-200 to-cyan-400 dark:bg-cyan-800 from:dark:bg-cyan-400 dark:to-cyan-600',
                'gradient' => 'bg-gradient-to-br from-cyan-100 to-cyan-300 text-cyan-800 dark:from-cyan-900 dark:to-cyan-500 dark:text-cyan-100',
                'divide' => 'divide-cyan-600 dark:divide-cyan-400',
            ],

            'secondary' => [
                'background' => 'bg-slate-50 dark:bg-slate-900',
                'text' => 'text-slate-400 dark:text-slate-600',
                'border' => 'border-slate-400 dark:border-slate-600',
                'shadow' => 'shadow-slate-400/100 dark:shadow-slate-700/100',
                'ring' => 'ring-slate-100 dark:ring-slate-800 ring-offset-slate-50 dark:ring-offset-slate-900',
                'hover' => 'hover:bg-slate-100 hover:from-slate-200 hover:to-slate-400 hover:dark:bg-slate-800 hover:from:dark:bg-slate-400 dark:hover:to-slate-600',
                'focus' => 'focus-within:border-slate-400 focus-within:border-8',
                'active' => 'bg-slate-100 from-slate-200 to-slate-400 dark:bg-slate-800 from:dark:bg-slate-400 dark:to-slate-600',
                'gradient' => 'bg-gradient-to-br from-slate-50 to-slate-200 text-slate-700 dark:from-slate-800 dark:to-slate-400 dark:text-slate-200',
                'divide' => 'divide-slate-400 dark:divide-slate-600',
            ],

            'success' => [
                'background' => 'bg-emerald-50 dark:bg-emerald-900',
                'text' => 'text-emerald-600 dark:text-emerald-400',
                'border' => 'border-emerald-600 dark:border-emerald-400',
                'shadow' => 'shadow-emerald-600/100 dark:shadow-emerald-700/100',
                'ring' => 'ring-emerald-200 dark:ring-emerald-700 ring-offset-emerald-100 dark:ring-offset-emerald-800',
                'hover' => 'hover:bg-emerald-100 hover:from-emerald-200 hover:to-emerald-400 hover:dark:bg-emerald-800 hover:from:dark:bg-emerald-400 dark:hover:to-emerald-600',
                'focus' => 'focus-within:border-emerald-600 focus-within:border-8',
                'active' => 'bg-emerald-100 from-emerald-200 to-emerald-400 dark:bg-emerald-800 from:dark:bg-emerald-400 dark:to-emerald-600',
                'gradient' => 'bg-gradient-to-br from-emerald-100 to-emerald-300 text-emerald-800 dark:from-emerald-900 dark:to-emerald-500 dark:text-emerald-100',
                'divide' => 'divide-emerald-600 dark:divide-emerald-400',
            ],

            'warning' => [
                'background' => 'bg-orange-50 dark:bg-orange-900',
                'text' => 'text-orange-600 dark:text-orange-400',
                'border' => 'border-orange-600 dark:border-orange-400',
                'shadow' => 'shadow-orange-600/100 dark:shadow-orange-700/100',
                'ring' => 'ring-orange-200 dark:ring-orange-700 ring-offset-orange-100 dark:ring-offset-orange-800',
                'hover' => 'hover:bg-orange-100 hover:from-orange-200 hover:to-orange-400 hover:dark:bg-orange-800 hover:from:dark:bg-orange-400 dark:hover:to-orange-600',
                'focus' => 'focus-within:border-orange-600 focus-within:border-8',
                'active' => 'bg-orange-100 from-orange-200 to-orange-400 dark:bg-orange-800 from:dark:bg-orange-400 dark:to-orange-600',
                'gradient' => 'bg-gradient-to-br from-orange-100 to-orange-300 text-orange-800 dark:from-orange-900 dark:to-orange-500 dark:text-orange-100',
                'divide' => 'divide-orange-600 dark:divide-orange-400',
            ],

            'danger' => [
                'background' => 'bg-red-50 dark:bg-red-900',
                'text' => 'text-red-600 dark:text-red-400',
                'border' => 'border-red-600 dark:border-red-400',
                'shadow' => 'shadow-red-600/100 dark:shadow-red-700/100',
                'ring' => 'ring-red-200 dark:ring-red-700 ring-offset-red-100 dark:ring-offset-red-800',
                'hover' => 'hover:bg-red-100 hover:from-red-200 hover:to-red-400 hover:dark:bg-red-800 hover:from:dark:bg-red-400 dark:hover:to-red-600',
                'focus' => 'focus-within:border-red-600 focus-within:border-8',
                'active' => 'bg-red-100 from-red-200 to-red-400 dark:bg-red-800 from:dark:bg-red-400 dark:to-red-600',
                'gradient' => 'bg-gradient-to-br from-red-100 to-red-300 text-red-800 dark:from-red-900 dark:to-red-500 dark:text-red-100',
                'divide' => 'divide-red-600 dark:divide-red-400',
            ],

        ],

        'components' => [

            'alert' => [
                'base' => 'flex flex-wrap items-center',
                'elements' => [
                    'content' => [
                        'base' => 'flex flex-col flex-1 gap-1',
                    ],
                    'title' => [
                        'base' => 'font-bold',
                        'sizes' => [
                            'xs' => 'text-base',
                            'sm' => 'text-lg',
                            'base' => 'text-xl',
                            'lg' => 'text-2xl',
                            'xl' => 'text-3xl',
                        ],
                    ],
                    'dismiss-icon' => [
                        'base' => 'fill-current text-inherit opacity-75',
                        'sizes' => [
                            'xs' => 'w-2',
                            'sm' => 'w-3',
                            'base' => 'w-4',
                            'lg' => 'w-5',
                            'xl' => 'w-6',
                        ],
                    ],
                    'dismiss-button' => [
                        'base' => '',
                    ],
                ],
                'sizes' => [
                    'xs' => 'text-xs px-2 py-1 gap-3',
                    'sm' => 'text-sm px-3 py-2 gap-4',
                    'base' => 'text-base px-4 py-3 gap-5',
                    'lg' => 'text-lg px-5 py-4 gap-6',
                    'xl' => 'text-xl px-6 py-5 gap-7',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                ],
                'options' => [
                    'gradient' => true,
                ],
            ],

            'avatar' => [
                'base' => 'inline-flex',
                'elements' => [
                    'label' => [
                        'base' => 'flex w-full justify-center items-center',
                        'sizes' => [
                            'xs' => 'text-base',
                            'sm' => 'text-lg',
                            'base' => 'text-xl',
                            'lg' => 'text-2xl',
                            'xl' => 'text-3xl',
                        ],
                    ],
                ],
                'sizes' => [
                    'xs' => 'h-10 w-10',
                    'sm' => 'h-12 w-12',
                    'base' => 'h-16 w-16',
                    'lg' => 'h-20 w-20',
                    'xl' => 'h-24 w-24',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                ],
            ],

            'badge' => [
                'base' => 'inline-flex items-center',
                'sizes' => [
                    'xs' => 'text-xs px-0.5 py-0.5 gap-0.5',
                    'sm' => 'text-xs px-1 py-0.5 gap-1',
                    'base' => 'text-sm px-2 py-1 gap-1',
                    'lg' => 'text-base px-3 py-2 gap-2',
                    'xl' => 'text-lg px-4 py-3 gap-3',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                ],
                'options' => [
                    'gradient' => true,
                ],
            ],

            'burger' => [
                'base' => 'lg:hidden',
                'elements' => [
                    'bar' => [
                        'base' => 'h-1 w-7 my-1.5 duration-300',
                    ],
                ],
                'options' => [
                    'safe' => 'transform translate-y-1.5 -rotate-45 hidden transform -translate-y-1 rotate-45'
                ],
            ],

            'button' => [
                'base' => 'inline-flex justify-center items-center text-center overflow-hidden',
                'elements' => [
                    'content' => [
                        'base' => 'grow',
                        'sizes' => [
                            'xs' => 'px-2 py-1',
                            'sm' => 'px-3 py-2',
                            'base' => 'px-4 py-3',
                            'lg' => 'px-5 py-4',
                            'xl' => 'px-6 py-5',
                        ],
                    ],
                    'prefix' => [
                        'base' => '',
                        'sizes' => [
                            'xs' => 'px-2 py-1',
                            'sm' => 'px-3 py-2',
                            'base' => 'px-4 py-3',
                            'lg' => 'px-5 py-4',
                            'xl' => 'px-6 py-5',
                        ],
                    ],
                    'suffix' => [
                        'base' => '',
                        'sizes' => [
                            'xs' => 'px-2 py-1',
                            'sm' => 'px-3 py-2',
                            'base' => 'px-4 py-3',
                            'lg' => 'px-5 py-4',
                            'xl' => 'px-6 py-5',
                        ],
                    ],
                ],
                'sizes' => [
                    'xs' => 'text-xs gap-1',
                    'sm' => 'text-sm gap-2',
                    'base' => 'text-base gap-3',
                    'lg' => 'text-lg gap-4',
                    'xl' => 'text-xl gap-5',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'animate' => [false, 'hover:translate-y-0.5 hover:translate-x-0.5 ease-in-out duration-300 hover:shadow-none'],
                    'border' => 'border-4',
                    'divide' => [false, 'divide-x-4'],
                    'full' => [false, 'w-full'],
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                ],
                'options' => [
                    'gradient' => true,
                    'hover' => true,
                ],
            ],

            'button-group' => [
                'base' => 'flex md:inline-flex flex-col md:flex-row [&>*]:border-[0px] [&>*]:rounded-none overflow-hidden',
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                    'divide' => [false, 'divide-y-4 md:divide-x-4 md:divide-y-0'],
                ],
            ],

            'card' => [
                'base' => 'flex flex-col overflow-hidden',
                'elements' => [
                    'header' => [
                        'base' => '',
                        'sizes' => [
                            'xs' => 'px-2 py-1',
                            'sm' => 'px-3 py-2',
                            'base' => 'px-4 py-3',
                            'lg' => 'px-5 py-4',
                            'xl' => 'px-6 py-5',
                        ],
                    ],
                    'body' => [
                        'base' => 'bg-white/80 dark:bg-slate-800',
                        'sizes' => [
                            'xs' => 'px-2 py-1',
                            'sm' => 'px-3 py-2',
                            'base' => 'px-4 py-3',
                            'lg' => 'px-5 py-4',
                            'xl' => 'px-6 py-5',
                        ],
                    ],
                    'footer' => [
                        'base' => '',
                        'sizes' => [
                            'xs' => 'px-2 py-1',
                            'sm' => 'px-3 py-2',
                            'base' => 'px-4 py-3',
                            'lg' => 'px-5 py-4',
                            'xl' => 'px-6 py-5',
                        ],
                    ],
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                    'divide' => [false, 'divide-y-4'],
                ],
                'options' => [
                    'gradient' => true,
                ],
            ],

            'code' => [
                'base' => 'flex flex-wrap overflow-auto',
                'sizes' => [
                    'xs' => 'text-xs px-2 py-1',
                    'sm' => 'text-sm px-3 py-2',
                    'base' => 'text-base px-4 py-3',
                    'lg' => 'text-lg px-5 py-4',
                    'xl' => 'text-xl px-6 py-5',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                ],
                'options' => [
                    'gradient' => true,
                ],
            ],

            'container' => [
                'base' => 'md:mx-auto overflow-hidden',
                'sizes' => [
                    'xs' => 'max-w-3xl mx-5 p-4 md:p-6',
                    'sm' => 'max-w-4xl mx-5 p-4 md:p-8',
                    'base' => 'max-w-5xl mx-5 p-4 md:p-10',
                    'lg' => 'max-w-6xl mx-5 p-4 md:p-12',
                    'xl' => 'max-w-7xl mx-5 p-4 md:p-14',
                    'full' => 'max-w-full mx-5 p-4 md:p-16',
                ],
                'grids' => [
                    '1' => 'grid md:grid-cols-1 gap-4',
                    '2' => 'grid md:grid-cols-2 gap-4',
                    '3' => 'grid md:grid-cols-3 gap-4',
                    '4' => 'grid md:grid-cols-4 gap-4',
                    '5' => 'grid md:grid-cols-5 gap-4',
                    '6' => 'grid md:grid-cols-6 gap-4',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                    'divide' => [false, 'divide-y-4'],
                ],
                'options' => [
                    'background' => true,
                ],
            ],

            'dropdown' => [
                'base' => 'hidden',
                'sizes' => [
                    'xs' => 'max-w-xs',
                    'sm' => 'max-w-sm',
                    'base' => 'max-w-md',
                    'lg' => 'max-w-lg',
                    'xl' => 'max-w-xl',
                    'full' => 'max-w-full',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                ],
            ],

            'faq' => [
                'base' => '[&_svg]:open:rotate-0',
                'elements' => [
                    'answer' => [
                        'base' => 'bg-white/80 dark:bg-slate-800',
                        'sizes' => [
                            'xs' => 'px-2 py-1',
                            'sm' => 'px-3 py-2',
                            'base' => 'px-4 py-3',
                            'lg' => 'px-5 py-4',
                            'xl' => 'px-6 py-5',
                        ],
                    ],
                    'expand-icon' => [
                        'base' => 'fill-current text-inherit hover:opacity-75 rotate-45 ease-in-out duration-300',
                        'sizes' => [
                            'xs' => 'w-2',
                            'sm' => 'w-3',
                            'base' => 'w-4',
                            'lg' => 'w-5',
                            'xl' => 'w-6',
                        ],
                    ],
                    'question' => [
                        'base' => 'list-none -webkit-details-marker:hidden flex justify-between items-center cursor-pointer',
                        'sizes' => [
                            'xs' => 'px-2 py-1 gap-1',
                            'sm' => 'px-3 py-2 gap-2',
                            'base' => 'px-4 py-3 gap-3',
                            'lg' => 'px-5 py-4 gap-4',
                            'xl' => 'px-6 py-5 gap-5',
                        ],
                    ],
                ],
                'sizes' => [
                    'xs' => 'text-xs',
                    'sm' => 'text-sm',
                    'base' => 'text-base',
                    'lg' => 'text-lg',
                    'xl' => 'text-xl',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                ],
            ],

            'grid' => [
                'base' => 'grid',
                'cols' => [
                    '1' => 'grid-cols-1 md:grid-cols-1',
                    '2' => 'grid-cols-1 md:grid-cols-2',
                    '3' => 'grid-cols-1 md:grid-cols-3',
                    '4' => 'grid-cols-1 md:grid-cols-4',
                    '5' => 'grid-cols-1 md:grid-cols-5',
                    '6' => 'grid-cols-1 md:grid-cols-6',
                    '7' => 'grid-cols-1 md:grid-cols-7',
                    '8' => 'grid-cols-1 md:grid-cols-8',
                    '9' => 'grid-cols-1 md:grid-cols-9',
                    '10' => 'grid-cols-1 md:grid-cols-10',
                    '11' => 'grid-cols-1 md:grid-cols-11',
                    '12' => 'grid-cols-1 md:grid-cols-12',
                ],
                'gap' => [
                    'px' => 'gap-px',
                    'xs' => 'gap-1',
                    'sm' => 'gap-2.5',
                    'base' => 'gap-5',
                    'lg' => 'gap-10',
                    'xl' => 'gap-20',
                ],
                'options' => [
                    'background' => false,
                    'text' => false,
                    'border' => false,
                    'shadow' => false,
                    'ring' => false,
                    'hover' => false,
                    'focus' => false,
                    'gradient' => false,
                    'divide' => false,
                ],
            ],

            'heading' => [
                'base' => '',
                'sizes' => [
                    'h1' => [
                        'xs' => 'text-2xl md:text-3xl font-bold mb-6',
                        'sm' => 'text-3xl md:text-4xl font-bold mb-6',
                        'base' => 'text-4xl md:text-5xl font-bold mb-6',
                        'lg' => 'text-5xl md:text-6xl font-bold mb-6',
                        'xl' => 'text-6xl md:text-7xl font-bold mb-6',
                    ],
                    'h2' => [
                        'xs' => 'text-xl md:text-2xl font-bold mb-5',
                        'sm' => 'text-2xl md:text-3xl font-bold mb-5',
                        'base' => 'text-3xl md:text-4xl font-bold mb-5',
                        'lg' => 'text-4xl md:text-5xl font-bold mb-5',
                        'xl' => 'text-5xl md:text-6xl font-bold mb-5',
                    ],
                    'h3' => [
                        'xs' => 'text-lg md:text-xl font-bold mb-4',
                        'sm' => 'text-xl md:text-2xl font-bold mb-4',
                        'base' => 'text-2xl md:text-3xl font-bold mb-4',
                        'lg' => 'text-3xl md:text-4xl font-bold mb-4',
                        'xl' => 'text-4xl md:text-5xl font-bold mb-4',
                    ],
                    'h4' => [
                        'xs' => 'text-base md:text-lg font-bold mb-3',
                        'sm' => 'text-lg md:text-xl font-bold mb-3',
                        'base' => 'text-xl md:text-2xl font-bold mb-3',
                        'lg' => 'text-2xl md:text-3xl font-bold mb-3',
                        'xl' => 'text-3xl md:text-4xl font-bold mb-3',
                    ],
                    'h5' => [
                        'xs' => 'text-sm md:text-base font-bold mb-2',
                        'sm' => 'text-base md:text-lg font-bold mb-2',
                        'base' => 'text-lg md:text-xl font-bold mb-2',
                        'lg' => 'text-xl md:text-2xl font-bold mb-2',
                        'xl' => 'text-2xl md:text-3xl font-bold mb-2',
                    ],
                    'h6' => [
                        'xs' => 'text-xs md:text-sm font-bold mb-1',
                        'sm' => 'text-sm md:text-base font-bold mb-1',
                        'base' => 'text-base md:text-lg font-bold mb-1',
                        'lg' => 'text-lg md:text-xl font-bold mb-1',
                        'xl' => 'text-xl md:text-2xl font-bold mb-1',
                    ],
                ],
                'options' => [
                    'background' => false,
                ],
            ],

            'input' => [
                'base' => 'flex overflow-hidden focus-within:relative focus-within:z-10',
                'elements' => [
                    'input' => [
                        'base' => 'bg-white dark:bg-slate-900 w-full border-0 focus:border-inherit focus:ring-0',
                        'sizes' => [
                            'xs' => 'placeholder:text-xs text-xs py-1',
                            'sm' => 'placeholder:text-sm text-sm py-2',
                            'base' => 'placeholder:text-base text-base py-3',
                            'lg' => 'placeholder:text-lg text-lg py-4',
                            'xl' => 'placeholder:text-xl text-xl py-5',
                        ],
                    ],
                    'input-checkbox' => [
                        'base' => 'inline-block mb-0 border-red-500',
                        'sizes' => [
                            'xs' => '',
                            'sm' => '',
                            'base' => '',
                            'lg' => '',
                            'xl' => '',
                        ],
                    ],
                    'input-checkbox-wrapper' => [
                        'base' => 'flex items-center gap-2',
                        'sizes' => [
                            'xs' => '',
                            'sm' => '',
                            'base' => '',
                            'lg' => '',
                            'xl' => '',
                        ],
                    ],
                    'input-checkbox-label' => [
                        'base' => 'mb-0 inline',
                        'sizes' => [
                            'xs' => '',
                            'sm' => '',
                            'base' => '',
                            'lg' => '',
                            'xl' => '',
                        ],
                    ],
                    'input-radio' => [
                        'base' => 'rounded-full inline-block mb-0',
                        'sizes' => [
                            'xs' => '',
                            'sm' => '',
                            'base' => '',
                            'lg' => '',
                            'xl' => '',
                        ],
                    ],
                    'input-radio-wrapper' => [
                        'base' => 'flex items-center gap-2',
                        'sizes' => [
                            'xs' => '',
                            'sm' => '',
                            'base' => '',
                            'lg' => '',
                            'xl' => '',
                        ],
                    ],
                    'input-radio-label' => [
                        'base' => 'mb-0 inline',
                        'sizes' => [
                            'xs' => '',
                            'sm' => '',
                            'base' => '',
                            'lg' => '',
                            'xl' => '',
                        ],
                    ],
                    'input-range' => [
                        'base' => 'appearance-none cursor-pointer rounded-full',
                        'sizes' => [
                            'xs' => '',
                            'sm' => '',
                            'base' => '',
                            'lg' => '',
                            'xl' => '',
                        ],
                    ],
                    'input-range-wrapper' => [
                        'base' => '',
                        'sizes' => [
                            'xs' => '',
                            'sm' => '',
                            'base' => '',
                            'lg' => '',
                            'xl' => '',
                        ],
                    ],
                    'input-range-label' => [
                        'base' => '',
                        'sizes' => [
                            'xs' => '',
                            'sm' => '',
                            'base' => '',
                            'lg' => '',
                            'xl' => '',
                        ],
                    ],
                    'label' => [
                        'base' => '',
                        'sizes' => [
                            'xs' => '',
                            'sm' => '',
                            'base' => '',
                            'lg' => '',
                            'xl' => '',
                        ],
                    ],
                    'prefix' => [
                        'base' => 'flex items-center',
                        'sizes' => [
                            'xs' => 'px-2',
                            'sm' => 'px-3',
                            'base' => 'px-4',
                            'lg' => 'px-5',
                            'xl' => 'px-6',
                        ],
                    ],
                    'suffix' => [
                        'base' => 'flex items-center',
                        'sizes' => [
                            'xs' => 'px-2',
                            'sm' => 'px-3',
                            'base' => 'px-4',
                            'lg' => 'px-5',
                            'xl' => 'px-6',
                        ],
                    ],
                ],
                'sizes' => [
                    'xs' => 'text-xs mb-3',
                    'sm' => 'text-sm mb-4',
                    'base' => 'text-base mb-5',
                    'lg' => 'text-lg mb-6',
                    'xl' => 'text-xl mb-7',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                    'divide' => [false, 'divide-x-4'],
                ],
                'options' => [
                    'background' => true,
                    'focus' => true,
                ],
            ],

            'input-group' => [
                'base' => 'grid',
                'sizes' => [
                    'xs' => 'p-2 mb-2',
                    'sm' => 'p-3 mb-3',
                    'base' => 'p-4 mb-4',
                    'lg' => 'p-5 mb-5',
                    'xl' => 'p-6 mb-6',
                ],
                'cols' => [
                    'auto' => 'flex flex-col md:flex-row flex-wrap',
                    '1' => 'grid-cols-1 md:grid-cols-1',
                    '2' => 'grid-cols-1 md:grid-cols-2',
                    '3' => 'grid-cols-1 md:grid-cols-3',
                    '4' => 'grid-cols-1 md:grid-cols-4',
                    '5' => 'grid-cols-1 md:grid-cols-5',
                    '6' => 'grid-cols-1 md:grid-cols-6',
                    '7' => 'grid-cols-1 md:grid-cols-7',
                    '8' => 'grid-cols-1 md:grid-cols-8',
                    '9' => 'grid-cols-1 md:grid-cols-9',
                    '10' => 'grid-cols-1 md:grid-cols-10',
                    '11' => 'grid-cols-1 md:grid-cols-11',
                    '12' => 'grid-cols-1 md:grid-cols-12',
                ],
                'gap' => [
                    'px' => 'gap-px',
                    'xs' => 'gap-1',
                    'sm' => 'gap-2.5',
                    'base' => 'gap-5',
                    'lg' => 'gap-10',
                    'xl' => 'gap-20',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                    'divide' => [false, 'divide-x'],
                    'full' => [false, 'w-full'],
                ],
                'options' => [
                    'gradient' => false,
                ],
            ],

            'label' => [
                'base' => 'flex items-center',
                'sizes' => [
                    'xs' => 'text-xs mb-1 gap-0.5',
                    'sm' => 'text-sm mb-1 gap-1',
                    'base' => 'text-base mb-1 gap-1',
                    'lg' => 'text-lg mb-1 gap-2',
                    'xl' => 'text-xl mb-1 gap-3',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => [false, 'border-2'],
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => [false, 'shadow-md'],
                    'divide' => [false, 'divide-x'],
                ],
                'options' => [
                    'background' => false,
                ],
            ],

            'link' => [
                'base' => 'inline whitespace-nowrap cursor-pointer underline',
                'sizes' => [
                    'xs' => 'text-xs',
                    'sm' => 'text-sm',
                    'base' => 'text-base',
                    'lg' => 'text-lg',
                    'xl' => 'text-xl',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => [false, 'border-2'],
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => [false, 'shadow-md'],
                    'divide' => [false, 'divide-x-2'],
                ],
                'options' => [
                    'background' => false,
                    'gradient' => false,
                    'hover' => true,
                ],
            ],

            'list-group' => [
                'base' => 'flex flex-col [&>*]:whitespace-nowrap',
                'sizes' => [
                    'xs' => 'text-xs px-2 py-1 gap-1',
                    'sm' => 'text-sm px-3 py-2 gap-2',
                    'base' => 'text-base px-4 py-3 gap-2',
                    'lg' => 'text-lg px-5 py-4 gap-3',
                    'xl' => 'text-xl px-6 py-5 gap-4',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                    'divide' => [false, 'divide-y'],
                ],
                'options' => [
                    'gradient' => true,
                ],
            ],

            'media' => [
                'base' => 'flex flex-col md:flex-row',
                'sizes' => [
                    'xs' => 'text-xs px-2 py-1 gap-3',
                    'sm' => 'text-sm px-3 py-2 gap-4',
                    'base' => 'text-base px-4 py-3 gap-5',
                    'lg' => 'text-lg px-5 py-4 gap-6',
                    'xl' => 'text-xl px-6 py-5 gap-7',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                    'full' => 'w-full',
                ],
            ],

            'menu' => [
                'base' => 'hidden lg:flex flex-col items-center lg:flex-row gap-5 w-full md:w-auto',
                'sizes' => [
                    'xs' => 'p-1 md:p-3 mt-5 lg:mt-0 gap-3',
                    'sm' => 'p-2 md:p-4 mt-5 lg:mt-0 gap-4',
                    'base' => 'p-3 md:p-5 mt-5 lg:mt-0 gap-5',
                    'lg' => 'p-4 md:p-5 mt-6 lg:mt-0 gap-6',
                    'xl' => 'p-5 md:p-5 mt-7 lg:mt-0 gap-7',
                    'full' => 'p-3 md:p-5 mt-5 lg:mt-0 gap-8',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                    'divide' => [false, 'divide-x-4'],
                ],
                'options' => [
                    'background' => false,
                ],
            ],

            'modal' => [
                'base' => '',
                'elements' => [
                    'backdrop' => [
                        'base' => 'hidden bg-slate-700/80 p-10 fixed top-0 left-0 w-full h-full justify-center items-center z-50',
                    ],
                    'content' => [
                        'base' => 'max-h-full relative top-0 overflow-auto',
                        'sizes' => [
                            'xs' => 'max-w-3xl',
                            'sm' => 'max-w-4xl',
                            'base' => 'max-w-5xl',
                            'lg' => 'max-w-6xl',
                            'xl' => 'max-w-7xl',
                            'full' => 'max-w-full',
                        ],
                    ],
                    'dismiss-button' => [
                        'base' => 'absolute top-0 right-0 w-10 h-10 flex items-center justify-center',
                    ],
                    'dismiss-icon' => [
                        'base' => 'fill-current text-white opacity-75 w-5',
                    ],
                ],
            ],

            'navbar' => [
                'base' => 'p-5',
                'elements' => [
                    'brand' => [
                        'base' => 'flex justify-between items-center w-full',
                    ],
                    'content' => [
                        'base' => 'flex flex-col lg:flex-row lg:justify-between items-start lg:items-center mx-auto',
                        'sizes' => [
                            'xs' => 'max-w-3xl',
                            'sm' => 'max-w-4xl',
                            'base' => 'max-w-5xl',
                            'lg' => 'max-w-6xl',
                            'xl' => 'max-w-7xl',
                            'full' => 'max-w-full',
                        ],
                    ],
                ],
                'sizes' => [
                    'xs' => '',
                    'sm' => '',
                    'base' => '',
                    'lg' => '',
                    'xl' => '',
                    'full' => '',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => [false, 'border-4'],
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                    'divide' => [false, 'divide-y-4'],
                ],
                'options' => [
                    'gradient' => true,
                ],
            ],

            'nav-link' => [
                'base' => 'inline-flex justify-start items-center text-center whitespace-nowrap overflow-hidden md:mb-0',
                'elements' => [
                    'content' => [
                        'base' => '',
                        'sizes' => [
                            'xs' => 'px-2 py-1',
                            'sm' => 'px-3 py-2',
                            'base' => 'px-4 py-3',
                            'lg' => 'px-5 py-4',
                            'xl' => 'px-6 py-5',
                        ],
                    ],
                    'prefix' => [
                        'base' => '',
                        'sizes' => [
                            'xs' => 'px-2 py-1',
                            'sm' => 'px-3 py-2',
                            'base' => 'px-4 py-3',
                            'lg' => 'px-5 py-4',
                            'xl' => 'px-6 py-5',
                        ],
                    ],
                    'suffix' => [
                        'base' => '',
                        'sizes' => [
                            'xs' => 'px-2 py-1',
                            'sm' => 'px-3 py-2',
                            'base' => 'px-4 py-3',
                            'lg' => 'px-5 py-4',
                            'xl' => 'px-6 py-5',
                        ],
                    ],
                ],
                'sizes' => [
                    'xs' => 'text-xs gap-1 mb-3',
                    'sm' => 'text-sm gap-2 mb-4',
                    'base' => 'text-base gap-3 mb-5',
                    'lg' => 'text-lg gap-4 mb-6',
                    'xl' => 'text-xl gap-5 mb-8',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'animate' => [false, 'hover:translate-y-0.5 hover:translate-x-0.5 ease-in-out duration-300 hover:shadow-none'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                    'divide' => [false, 'divide-x-4'],
                ],
                'options' => [
                    'gradient' => true,
                    'hover' => true,
                ],
            ],

            'progress' => [
                'base' => '',
                'elements' => [
                    'bar' => [
                        'base' => 'bg-white dark:bg-slate-800',
                    ],
                    'label' => [
                        'base' => '',
                    ],
                    'percentage' => [
                        'base' => 'font-bold',
                    ],
                    'progress-wrapper' => [
                        'base' => '',
                    ],
                    'text-wrapper' => [
                        'base' => 'flex flex-wrap justify-between mb-1',
                    ],
                ],
                'sizes' => [
                    'xs' => 'h-px',
                    'sm' => 'h-1',
                    'base' => 'h-2.5',
                    'lg' => 'h-5',
                    'xl' => 'h-10',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                ],
                'options' => [
                    'gradient' => true,
                ],
            ],

            'section' => [
                'base' => '',
                'sizes' => [
                    'xs' => 'py-5',
                    'sm' => 'py-10',
                    'base' => 'py-20',
                    'lg' => 'py-24',
                    'xl' => 'py-28',
                    'full' => 'py-36',
                ],
                'attributes' => [
                    'full' => [false, 'min-h-screen flex flex-col sm:justify-center items-center'],
                ],
                'options' => [
                    'gradient' => false,
                    'text' => false,
                    'background' => false,
                ],
            ],

            'select' => [
                'base' => 'flex overflow-hidden',
                'elements' => [
                    'prefix' => [
                        'base' => 'flex items-center',
                        'sizes' => [
                            'xs' => 'px-2',
                            'sm' => 'px-3',
                            'base' => 'px-4',
                            'lg' => 'px-5',
                            'xl' => 'px-6',
                        ],
                    ],
                    'select' => [
                        'base' => 'bg-white dark:bg-slate-900 text-slate-900 dark:text-slate-50 w-full border-0 focus:border-inherit focus:ring-0',
                        'sizes' => [
                            'xs' => 'text-xs placeholder:text-xs p-1',
                            'sm' => 'text-sm placeholder:text-sm p-2',
                            'base' => 'text-base placeholder:text-base p-3',
                            'lg' => 'text-lg placeholder:text-lg p-4',
                            'xl' => 'text-xl placeholder:text-xl p-5',
                        ],
                    ],
                    'suffix' => [
                        'base' => 'flex items-center',
                        'sizes' => [
                            'xs' => 'px-2',
                            'sm' => 'px-3',
                            'base' => 'px-4',
                            'lg' => 'px-5',
                            'xl' => 'px-6',
                        ],
                    ],
                ],
                'sizes' => [
                    'xs' => 'mb-3',
                    'sm' => 'mb-4',
                    'base' => 'mb-5',
                    'lg' => 'mb-6',
                    'xl' => 'mb-7',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                    'divide' => [false, 'divide-x-4'],
                ],
                'options' => [
                    'background' => false,
                    'focus' => true,
                ],
            ],

            'sidebar' => [
                'base' => 'fixed top-0 left-0 z-40 h-screen',
                'sizes' => [
                    'xs' => 'w-10',
                    'sm' => 'w-32',
                    'base' => 'w-64',
                    'lg' => 'w-72',
                    'xl' => 'w-80',
                    'half' => 'w-1/2',
                    'full' => 'w-full',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => [false, 'border'],
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => [false, 'shadow-md'],
                ],
            ],

            'stat' => [
                'base' => 'relative flex flex-col gap-3 overflow-hidden',
                'elements' => [
                    'description' => [
                        'base' => '',
                        'sizes' => [
                            'xs' => 'text-xs',
                            'sm' => 'text-sm',
                            'base' => 'text-base',
                            'lg' => 'text-lg',
                            'xl' => 'text-xl',
                        ],
                    ],
                    'icon' => [
                        'base' => 'absolute opacity-10 transform -translate-y-1/2',
                        'sizes' => [
                            'xs' => 'text-4xl top-1/2 right-2',
                            'sm' => 'text-5xl top-1/2 right-3',
                            'base' => 'text-6xl top-1/2 right-4',
                            'lg' => 'text-7xl top-1/2 right-5',
                            'xl' => 'text-8xl top-1/2 right-6',
                        ],
                    ],
                    'title' => [
                        'base' => 'uppercase font-bold',
                        'sizes' => [
                            'xs' => 'text-xs',
                            'sm' => 'text-sm',
                            'base' => 'text-base',
                            'lg' => 'text-lg',
                            'xl' => 'text-xl',
                        ],
                    ],
                    'value' => [
                        'base' => 'font-bold',
                        'sizes' => [
                            'xs' => 'text-2xl',
                            'sm' => 'text-3xl',
                            'base' => 'text-4xl',
                            'lg' => 'text-5xl',
                            'xl' => 'text-6xl',
                        ],
                    ],
                ],
                'sizes' => [
                    'xs' => 'px-2 py-4',
                    'sm' => 'px-3 py-5',
                    'base' => 'px-4 py-6',
                    'lg' => 'px-5 py-7',
                    'xl' => 'px-6 py-8',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                    'divide' => [false, 'divide-y-4'],
                ],
            ],

            'switcher' => [
                'base' => 'flex items-center flex-shrink-0 peer-checked:bg-emerald-400 after:bg-white after:dark:bg-slate-800 after:duration-300 ease-in-out cursor-pointer peer-disabled:bg-slate-100',
                'elements' => [
                    'input' => [
                        'base' => 'hidden peer',
                    ],
                    'label' => [
                        'base' => 'flex justify-between items-center gap-5',
                    ],
                ],
                'sizes' => [
                    'xs' => 'w-8 h-5 p-1 after:w-3 after:h-3 peer-checked:after:translate-x-3',
                    'sm' => 'w-10 h-6 p-1 after:w-4 after:h-4 peer-checked:after:translate-x-4',
                    'base' => 'w-12 h-8 p-1 after:w-6 after:h-6 peer-checked:after:translate-x-4',
                    'lg' => 'w-16 h-12 p-2 after:w-8 after:h-8 peer-checked:after:translate-x-4',
                    'xl' => 'w-20 h-14 p-2 after:w-10 after:h-10 peer-checked:after:translate-x-6',
                ],
                'attributes' => [
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded-full after:rounded-full'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                ],
            ],

            'table' => [
                'base' => 'overflow-x-auto text-left w-full',
                'elements' => [
                    'tbody' => [
                        'base' => 'bg-white/80 dark:bg-slate-800',
                        'sizes' => [
                            'xs' => '[&_td]:p-2',
                            'sm' => '[&_td]:p-3',
                            'base' => '[&_td]:p-4',
                            'lg' => '[&_td]:p-5',
                            'xl' => '[&_td]:p-6',
                        ],
                    ],
                    'tfoot' => [
                        'base' => '',
                        'sizes' => [
                            'xs' => '',
                            'sm' => '',
                            'base' => '',
                            'lg' => '',
                            'xl' => '',
                        ],
                    ],
                    'thead' => [
                        'base' => '',
                        'sizes' => [
                            'xs' => '[&_th]:p-2',
                            'sm' => '[&_th]:p-3',
                            'base' => '[&_th]:p-4',
                            'lg' => '[&_th]:p-5',
                            'xl' => '[&_th]:p-6',
                        ],
                    ],
                ],
                'sizes' => [
                    'xs' => '',
                    'sm' => '',
                    'base' => '',
                    'lg' => '',
                    'xl' => '',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                    'divide' => [false, '[&_table]:divide-y-4'],
                    'striped' => [false, '[&_table>tbody>*:nth-child(odd)]:bg-slate-900/5 [&_table>tbody>*:nth-child(odd)]:dark:bg-slate-900/50'],
                ],
            ],

            'text' => [
                'base' => '',
                'sizes' => [
                    'h1' => [
                        'xs' => 'text-2xl md:text-3xl font-bold mb-6',
                        'sm' => 'text-3xl md:text-4xl font-bold mb-6',
                        'base' => 'text-4xl md:text-5xl font-bold mb-6',
                        'lg' => 'text-5xl md:text-6xl font-bold mb-6',
                        'xl' => 'text-6xl md:text-7xl font-bold mb-6',
                    ],
                    'h2' => [
                        'xs' => 'text-xl md:text-2xl font-bold mb-5',
                        'sm' => 'text-2xl md:text-3xl font-bold mb-5',
                        'base' => 'text-3xl md:text-4xl font-bold mb-5',
                        'lg' => 'text-4xl md:text-5xl font-bold mb-5',
                        'xl' => 'text-5xl md:text-6xl font-bold mb-5',
                    ],
                    'h3' => [
                        'xs' => 'text-lg md:text-xl font-bold mb-4',
                        'sm' => 'text-xl md:text-2xl font-bold mb-4',
                        'base' => 'text-2xl md:text-3xl font-bold mb-4',
                        'lg' => 'text-3xl md:text-4xl font-bold mb-4',
                        'xl' => 'text-4xl md:text-5xl font-bold mb-4',
                    ],
                    'h4' => [
                        'xs' => 'text-base md:text-lg font-bold mb-3',
                        'sm' => 'text-lg md:text-xl font-bold mb-3',
                        'base' => 'text-xl md:text-2xl font-bold mb-3',
                        'lg' => 'text-2xl md:text-3xl font-bold mb-3',
                        'xl' => 'text-3xl md:text-4xl font-bold mb-3',
                    ],
                    'h5' => [
                        'xs' => 'text-sm md:text-base font-bold mb-2',
                        'sm' => 'text-base md:text-lg font-bold mb-2',
                        'base' => 'text-lg md:text-xl font-bold mb-2',
                        'lg' => 'text-xl md:text-2xl font-bold mb-2',
                        'xl' => 'text-2xl md:text-3xl font-bold mb-2',
                    ],
                    'h6' => [
                        'xs' => 'text-xs md:text-sm font-bold mb-1',
                        'sm' => 'text-sm md:text-base font-bold mb-1',
                        'base' => 'text-base md:text-lg font-bold mb-1',
                        'lg' => 'text-lg md:text-xl font-bold mb-1',
                        'xl' => 'text-xl md:text-2xl font-bold mb-1',
                    ],
                    'p' => [
                        'xs' => 'text-xs md:text-sm mb-5',
                        'sm' => 'text-sm md:text-base mb-5',
                        'base' => 'text-base md:text-lg mb-5',
                        'lg' => 'text-lg md:text-xl mb-5',
                        'xl' => 'text-xl md:text-2xl mb-5',
                    ],
                ],
                'options' => [
                    'background' => false,
                ],
            ],

            'textarea' => [
                'base' => '',
                'elements' => [
                    'footer' => [
                        'base' => '',
                        'sizes' => [
                            'xs' => 'px-2 py-1',
                            'sm' => 'px-3 py-2',
                            'base' => 'px-4 py-3',
                            'lg' => 'px-5 py-4',
                            'xl' => 'px-6 py-5',
                        ],
                    ],
                    'header' => [
                        'base' => '',
                        'sizes' => [
                            'xs' => 'px-2 py-1',
                            'sm' => 'px-3 py-2',
                            'base' => 'px-4 py-3',
                            'lg' => 'px-5 py-4',
                            'xl' => 'px-6 py-5',
                        ],
                    ],
                    'label' => [
                        'base' => '',
                    ],
                    'textarea' => [
                        'base' => 'w-full border-0 bg-white dark:bg-slate-900 focus:border-inherit focus:ring-0',
                        'sizes' => [
                            'xs' => 'px-2 py-1 placeholder:text-xs',
                            'sm' => 'px-3 py-2 placeholder:text-sm',
                            'base' => 'px-4 py-3 placeholder:text-base',
                            'lg' => 'px-5 py-4 placeholder:text-lg',
                            'xl' => 'px-6 py-5 placeholder:text-xl',
                        ],
                    ],
                    'textarea-wrapper' => [
                        'base' => '',
                    ],
                ],
                'sizes' => [
                    'xs' => 'text-xs mb-3',
                    'sm' => 'text-sm mb-4',
                    'base' => 'text-base mb-5',
                    'lg' => 'text-lg mb-6',
                    'xl' => 'text-xl mb-7',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                    'divide' => [false, 'divide-y-4'],
                ],
                'options' => [
                    'focus' => true,
                ],
            ],

            'theme-switcher' => [
                'base' => '',
                'elements' => [
                    'list-group' => [
                        'base' => 'px-0 py-0.5 gap-0 border-none',
                    ],
                    'light-button' => [
                        'base' => 'text-left border-none',
                    ],
                    'dark-button' => [
                        'base' => 'text-left border-none',
                    ],
                    'switch-button' => [
                        'base' => 'border-none',
                        'sizes' => [
                            'xs' => 'px-2 py-1',
                            'sm' => 'px-3 py-2',
                            'base' => 'px-4 py-3',
                            'lg' => 'px-5 py-4',
                            'xl' => 'px-6 py-5',
                        ],
                    ],
                    'system-button' => [
                        'base' => 'text-left border-none',
                    ],
                ],
            ],

            'toast' => [
                'base' => 'fixed top-5 right-5',
                'elements' => [
                    'content' => [
                        'base' => 'flex flex-col flex-1 gap-1',
                    ],
                    'dismiss-icon' => [
                        'base' => 'fill-current text-inherit opacity-75',
                        'sizes' => [
                            'xs' => 'w-2',
                            'sm' => 'w-3',
                            'base' => 'w-4',
                            'lg' => 'w-5',
                            'xl' => 'w-6',
                        ],
                    ],
                    'title' => [
                        'base' => 'font-bold',
                        'sizes' => [
                            'xs' => 'text-base',
                            'sm' => 'text-lg',
                            'base' => 'text-xl',
                            'lg' => 'text-2xl',
                            'xl' => 'text-3xl',
                        ],
                    ],
                    'toast' => [
                        'base' => 'inline-flex flex-wrap items-center',
                        'sizes' => [
                            'xs' => 'text-xs px-2 py-1 gap-3',
                            'sm' => 'text-sm px-3 py-2 gap-4',
                            'base' => 'text-base px-4 py-3 gap-5',
                            'lg' => 'text-lg px-5 py-4 gap-6',
                            'xl' => 'text-xl px-6 py-5 gap-7',
                        ],
                    ],
                ],
                'sizes' => [
                    'xs' => ' ',
                    'sm' => '',
                    'base' => '',
                    'lg' => '',
                    'xl' => '',
                ],
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-4',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => 'shadow-[5px_5px_0_0_rgba(0,0,0,1)]',
                ],
                'options' => [
                    'gradient' => true,
                ],
            ],

        ],
    
    ],

];