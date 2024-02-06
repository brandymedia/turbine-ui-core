<?php

return [
    
    'meta' => [
        'name' => 'kinetic',
        'description' => 'Turbine UI Kinetic theme',
    ],

    'design' => [

        'variants' => [
            
            'default' => [
                'background' => 'bg-white dark:bg-slate-900',
                'text' => 'text-slate-800 dark:text-slate-200',
                'border' => 'border-slate-300 dark:border-slate-700',
                'shadow' => 'shadow-slate-300/50 dark:shadow-slate-900/50',
                'ring' => 'ring-slate-200 dark:ring-slate-700 ring-offset-slate-100 dark:ring-offset-slate-800',
                'hover' => 'hover:bg-slate-300 hover:dark:bg-slate-900 hover:from-slate-400 hover:to-slate-700 hover:text-slate-800/70 hover:dark:text-slate-400/70',
                'focus' => 'focus-within:outline focus-within:outline-slate-600 dark:focus-within:outline-slate-400 focus-within:outline-2',
                'active' => 'bg-slate-300 dark:bg-slate-900 from-slate-400 to-slate-700',
                'gradient' => 'bg-gradient-to-br from-slate-200 to-slate-100 text-slate-800',
                'divide' => 'divide-slate-300 dark:divide-slate-700',
                'accent' => 'accent-slate-600 hover:accent-slate-700',
            ],
            
            'dark' => [
                'background' => 'bg-slate-900',
                'text' => 'text-slate-300',
                'border' => 'border-slate-700',
                'shadow' => 'shadow-slate-900/10',
                'ring' => 'ring-slate-700 ring-offset-slate-800',
                'hover' => 'hover:bg-slate-800 hover:from-slate-400 hover:to-slate-700',
                'focus' => 'focus-within:outline focus-within:outline-slate-900 focus-within:outline-2',
                'active' => 'bg-slate-800 from-slate-400 to-slate-700',
                'gradient' => 'bg-gradient-to-br from-slate-700 to-slate-400 text-slate-100',
                'divide' => 'divide-slate-800',
                'accent' => 'accent-slate-600 hover:accent-slate-700',
            ],

            'light' => [
                'background' => 'bg-slate-50/80 dark:bg-slate-900',
                'text' => 'text-slate-800 dark:text-slate-200',
                'border' => 'border-slate-200 dark:border-slate-700',
                'shadow' => 'shadow-slate-500/10 dark:shadow-slate-900/10',
                'ring' => 'ring-slate-200 dark:ring-slate-700 ring-offset-slate-100 dark:ring-offset-slate-800',
                'hover' => 'hover:bg-slate-300 hover:dark:bg-slate-800 hover:from-slate-400 hover:to-slate-700 hover:text-slate-800/70 hover:dark:text-slate-400/70',
                'focus' => 'focus-within:outline focus-within:outline-slate-600 dark:focus-within:outline-slate-400 focus-within:outline-2',
                'active' => 'bg-slate-300 dark:bg-slate-800 from-slate-400 to-slate-700',
                'gradient' => 'bg-gradient-to-br from-slate-700 to-slate-400 text-slate-100',
                'divide' => 'divide-slate-200 dark:divide-slate-700',
                'accent' => 'accent-slate-600 hover:accent-slate-700',
            ],
            
            'brand' => [
                'background' => 'bg-brand-200 dark:bg-brand-800',
                'text' => 'text-brand-800 dark:text-brand-200',
                'border' => 'border-brand-300 dark:border-brand-900',
                'shadow' => 'shadow-brand-300/50 dark:shadow-brand-900/50',
                'ring' => 'ring-brand-200 dark:ring-brand-700 ring-offset-brand-100 dark:ring-offset-brand-800',
                'hover' => 'hover:bg-brand-300 hover:dark:bg-brand-900 hover:from-brand-400 hover:to-brand-700 hover:text-brand-800/70 hover:dark:text-brand-400/70',
                'focus' => 'focus-within:outline focus-within:outline-brand-600 dark:focus-within:outline-brand-400 focus-within:outline-2',
                'active' => 'bg-brand-300 dark:bg-brand-900 from-brand-400 to-brand-700',
                'gradient' => 'bg-gradient-to-br from-brand-700 to-brand-400 text-brand-100',
                'divide' => 'divide-brand-300 dark:divide-brand-900',
                'accent' => 'accent-brand-600 hover:accent-brand-700',
            ],
            
            'primary' => [
                'background' => 'bg-cyan-200 dark:bg-cyan-700',
                'text' => 'text-cyan-800 dark:text-cyan-200',
                'border' => 'border-cyan-300 dark:border-cyan-900',
                'shadow' => 'shadow-cyan-300/50 dark:shadow-cyan-900/50',
                'ring' => 'ring-cyan-200 dark:ring-cyan-700 ring-offset-cyan-100 dark:ring-offset-cyan-800',
                'hover' => 'hover:bg-cyan-300 hover:dark:bg-cyan-900 hover:from-cyan-400 hover:to-cyan-700 hover:text-cyan-800/70 hover:dark:text-cyan-400/70',
                'focus' => 'focus-within:outline focus-within:outline-cyan-600 dark:focus-within:outline-cyan-400 focus-within:outline-2',
                'active' => 'bg-cyan-300 dark:bg-cyan-900 from-cyan-400 to-cyan-700',
                'gradient' => 'bg-gradient-to-br from-cyan-700 to-cyan-400 text-cyan-100',
                'divide' => 'divide-cyan-300 dark:divide-cyan-900',
                'accent' => 'accent-cyan-600 hover:accent-cyan-700',
            ],
            
            'secondary' => [
                'background' => 'bg-slate-200 dark:bg-slate-700',
                'text' => 'text-slate-800 dark:text-slate-200',
                'border' => 'border-slate-300 dark:border-slate-900',
                'shadow' => 'shadow-slate-300/50 dark:shadow-slate-900/50',
                'ring' => 'ring-slate-200 dark:ring-slate-700 ring-offset-slate-100 dark:ring-offset-slate-800',
                'hover' => 'hover:bg-slate-300 hover:dark:bg-slate-900 hover:from-slate-400 hover:to-slate-700 hover:text-slate-800/70 hover:dark:text-slate-400/70',
                'focus' => 'focus-within:outline focus-within:outline-slate-600 dark:focus-within:outline-slate-400 focus-within:outline-2',
                'active' => 'bg-slate-300 dark:bg-slate-900 from-slate-400 to-slate-700',
                'gradient' => 'bg-gradient-to-br from-slate-700 to-slate-400 text-slate-100',
                'divide' => 'divide-slate-300 dark:divide-slate-900',
                'accent' => 'accent-slate-600 hover:accent-slate-700',
            ],
        
            'success' => [
                'background' => 'bg-emerald-200 dark:bg-emerald-700',
                'text' => 'text-emerald-800 dark:text-emerald-200',
                'border' => 'border-emerald-300 dark:border-emerald-900',
                'shadow' => 'shadow-emerald-300/50 dark:shadow-emerald-900/50',
                'ring' => 'ring-emerald-200 dark:ring-emerald-700 ring-offset-emerald-100 dark:ring-offset-emerald-800',
                'hover' => 'hover:bg-emerald-300 hover:dark:bg-emerald-900 hover:from-emerald-400 hover:to-emerald-700 hover:text-emerald-800/70 hover:dark:text-emerald-400/70',
                'focus' => 'focus-within:outline focus-within:outline-emerald-600 dark:focus-within:outline-emerald-400 focus-within:outline-2',
                'active' => 'bg-emerald-300 dark:bg-emerald-900 from-emerald-400 to-emerald-700',
                'gradient' => 'bg-gradient-to-br from-emerald-700 to-emerald-400 text-emerald-100',
                'divide' => 'divide-emerald-300 dark:divide-emerald-900',
                'accent' => 'accent-emerald-600 hover:accent-emerald-700',
            ],
        
            'warning' => [
                'background' => 'bg-orange-200 dark:bg-orange-700',
                'text' => 'text-orange-800 dark:text-orange-200',
                'border' => 'border-orange-300 dark:border-orange-900',
                'shadow' => 'shadow-orange-300/50 dark:shadow-orange-900/50',
                'ring' => 'ring-orange-200 dark:ring-orange-700 ring-offset-orange-100 dark:ring-offset-orange-800',
                'hover' => 'hover:bg-orange-300 hover:dark:bg-orange-900 hover:from-orange-400 hover:to-orange-700 hover:text-orange-800/70 hover:dark:text-orange-400/70',
                'focus' => 'focus-within:outline focus-within:outline-orange-600 dark:focus-within:outline-orange-400 focus-within:outline-2',
                'active' => 'bg-orange-300 dark:bg-orange-900 from-orange-400 to-orange-700',
                'gradient' => 'bg-gradient-to-br from-orange-700 to-orange-400 text-orange-100',
                'divide' => 'divide-orange-300 dark:divide-orange-900',
                'accent' => 'accent-orange-600 hover:accent-orange-700',
            ],
        
            'danger' => [
                'background' => 'bg-red-200 dark:bg-red-700',
                'text' => 'text-red-800 dark:text-red-200',
                'border' => 'border-red-300 dark:border-red-900',
                'shadow' => 'shadow-red-300/50 dark:shadow-red-900/50',
                'ring' => 'ring-red-200 dark:ring-red-700 ring-offset-red-100 dark:ring-offset-red-800',
                'hover' => 'hover:bg-red-300 hover:dark:bg-red-900 hover:from-red-400 hover:to-red-700 hover:text-red-800/70 hover:dark:text-red-400/70',
                'focus' => 'focus-within:outline focus-within:outline-red-600 dark:focus-within:outline-red-400 focus-within:outline-2',
                'active' => 'bg-red-300 dark:bg-red-900 from-red-400 to-red-700',
                'gradient' => 'bg-gradient-to-br from-red-700 to-red-400 text-red-100',
                'divide' => 'divide-red-300 dark:divide-red-900',
                'accent' => 'accent-red-600 hover:accent-red-700',
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
                    'border' => 'border-2',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded',
                    'shadow' => [false, 'shadow-md'],
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
                    'border' => 'border-2',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded-full',
                    'shadow' => [false, 'shadow-md'],
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
                    'border' => 'border-2',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded',
                    'shadow' => [false, 'shadow-sm'],
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
                    'animate' => [false, 'hover:shadow-none hover:scale-95 ease-in-out duration-300'],
                    'border' => 'border-2',
                    'divide' => [false, 'divide-x-2'],
                    'full' => [false, 'w-full'],
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded',
                    'shadow' => [false, 'shadow-md'],
                ],
                'options' => [
                    'gradient' => false,
                    'hover' => true,
                ],
            ],

            'button-group' => [
                'base' => 'flex md:inline-flex flex-col md:flex-row [&>*]:border-[0px] [&>*]:rounded-none overflow-hidden',
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-2',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded',
                    'shadow' => [false, 'shadow-md'],
                    'divide' => [false, 'divide-y-2 md:divide-x-2 md:divide-y-0'],
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
                    'border' => 'border-2',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded',
                    'shadow' => [false, 'shadow-md'],
                    'divide' => [false, 'divide-y'],
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
                    'border' => 'border-2',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded',
                    'shadow' => [false, 'shadow-md'],
                ],
            ],

            'combine' => [
                // 'base' => 'flex [&_*]:mb-0 [&_*:first-child]:rounded-tr-none [&_*:first-child]:rounded-br-none [&_*:first-child]:border-r-0 [&>*:last-child]:rounded-tl-none [&>*:last-child]:rounded-bl-none [&>*:last-child]:border-l-0',
                // 'base' => 'flex gap-0.5 [&_*]:m-0 [&_*]:rounded-none',
                'base' => 'flex overflow-hidden',
                'attributes' => [
                    'accent' => [false, 'border-l-8'],
                    'border' => 'border-2',
                    'divide' => [false, 'divide-x-2'],
                    'full' => [false, 'w-full'],
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded-lg',
                    'shadow' => [false, 'shadow-md'],
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
                    'full' => 'max-w-full p-4 md:p-16',
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
                    'border' => 'border-2',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded',
                    'shadow' => [false, 'shadow-md'],
                    'divide' => [false, 'divide-y'],
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
                    'border' => 'border-2',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded',
                    'shadow' => [false, 'shadow-md'],
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
                    'border' => 'border-2',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded',
                    'shadow' => [false, 'shadow-md'],
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
                    'hint' => [
                        'base' => 'text-right text-slate-400',
                    ],
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
                        'base' => 'inline-block mb-0',
                        'sizes' => [
                            'xs' => '',
                            'sm' => '',
                            'base' => '',
                            'lg' => '',
                            'xl' => '',
                        ],
                    ],
                    'input-checkbox-wrapper' => [
                        'base' => 'flex items-center gap-1',
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
                        'base' => 'flex items-center gap-1',
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
                        'base' => 'flex justify-between',
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
                    'border' => 'border-2',
                    'full' => [false, 'w-full'],
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded',
                    'shadow' => [false, 'shadow-md'],
                    'divide' => [false, 'divide-x-2'],
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
                    'border' => 'border-2',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded',
                    'shadow' => [false, 'shadow-md'],
                    'divide' => [false, 'divide-x'],
                    'full' => [false, 'w-full'],
                ],
                'options' => [
                    'gradient' => false,
                ],
            ],

            'label' => [
                'base' => 'flex items-center mb-1',
                'elements' => [
                    'content' => [
                        'base' => 'w-full flex justify-between',
                    ],
                    'hint' => [
                        'base' => 'text-right text-slate-400',
                    ],
                ],
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
                'base' => 'inline whitespace-nowrap cursor-pointer',
                'elements' => [
                    'content' => [
                        'base' => 'underline',
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
                    'border' => 'border-2',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded',
                    'shadow' => [false, 'shadow-md'],
                    'divide' => [false, 'divide-y'],
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
                    'border' => 'border-2',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded',
                    'shadow' => [false, 'shadow-md'],
                    'full' => 'w-full',
                ],
            ],

            'menu' => [
                'base' => 'hidden lg:flex flex-col items-center lg:flex-row w-full md:w-auto',
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
                    'border' => [false, 'border-2'],
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => [false, 'shadow-md'],
                    'divide' => [false, 'divide-x-2'],
                ],
            ],

            'modal' => [
                'base' => '',
                'elements' => [
                    'backdrop' => [
                        'base' => 'hidden bg-slate-700/90 p-10 fixed top-0 left-0 w-full h-full justify-center items-center z-50',
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
                    'border' => [false, 'border-2'],
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => [false, 'shadow-md'],
                    'divide' => [false, 'divide-y'],
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
                    'animate' => [false, 'hover:shadow-none hover:scale-95 ease-in-out duration-300'],
                    'border' => [false, 'border-2'],
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded',
                    'shadow' => [false, 'shadow-md'],
                    'divide' => [false, 'divide-x-2'],
                ],
                'options' => [
                    'gradient' => false,
                    'hover' => true,
                ],
            ],

            'progress' => [
                'base' => '',
                'elements' => [
                    'bar' => [
                        'base' => 'bg-white dark:bg-slate-800 rounded-full',
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
                    'border' => [false, 'border'],
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded-full',
                    'shadow' => [false, 'shadow-md'],
                ],
                'options' => [
                    'gradient' => false,
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
                    'border' => 'border-2',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded',
                    'shadow' => [false, 'shadow-md'],
                    'divide' => [false, 'divide-x-2'],
                ],
                'options' => [
                    'background' => true,
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
                    'border' => 'border-2',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded',
                    'shadow' => [false, 'shadow-md'],
                    'divide' => [false, 'divide-y'],
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
                    'border' => [false, 'border'],
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded-full after:rounded-full',
                    'shadow' => [false, 'shadow-md'],
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
                    'border' => [false, 'border'],
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => [false, 'rounded'],
                    'shadow' => [false, 'shadow-md'],
                    'divide' => [false, '[&_table]:divide-y'],
                    'striped' => [false, '[&>tbody>*:nth-child(odd)]:bg-slate-900/5 [&>tbody>*:nth-child(odd)]:dark:bg-slate-900/50'],
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
                        'xs' => 'text-xs md:text-sm mb-5 leading-relaxed md:leading-relaxed',
                        'sm' => 'text-sm md:text-base mb-5 leading-relaxed md:leading-relaxed',
                        'base' => 'text-base md:text-lg mb-5 leading-relaxed md:leading-relaxed',
                        'lg' => 'text-lg md:text-xl mb-5 leading-relaxed md:leading-relaxed',
                        'xl' => 'text-xl md:text-2xl mb-5 leading-relaxed md:leading-relaxed',
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
                    'border' => 'border-2',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded',
                    'shadow' => [false, 'shadow-md'],
                    'divide' => [false, 'divide-y'],
                ],
                'options' => [
                    'focus' => true,
                ],
            ],

            'theme-switcher' => [
                'base' => 'border-none',
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
                    'border' => 'border-2',
                    'ring' => [false, 'ring-2 ring-offset-2'],
                    'rounded' => 'rounded',
                    'shadow' => [false, 'shadow-md'],
                ],
                'options' => [
                    'gradient' => false,
                    'hover' => false,
                ],
            ],

        ],
    
    ],

];