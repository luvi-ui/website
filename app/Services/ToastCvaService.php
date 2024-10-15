<?php

namespace App\Services;

use FeatureNinja\Cva\ClassVarianceAuthority;

class ToastCvaService
{
    public static function new(): ClassVarianceAuthority
    {
        return ClassVarianceAuthority::new(
            [
                'group pointer-events-auto relative flex w-full items-center justify-between space-x-2 overflow-hidden rounded-md border p-4 pr-6 shadow-lg transition-all data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out data-[state=closed]:slide-out-to-right-full data-[state=open]:slide-in-from-top-full data-[state=open]:sm:slide-in-from-bottom-full',
            ],
            [
                'variants' => [
                    'variant' => [
                        'default' => 'border bg-background text-foreground',
                        'destructive' => 'destructive group border-destructive bg-destructive text-destructive-foreground',
                    ],
                ],
                'defaultVariants' => [
                    'variant' => 'default',
                ],
            ],
        );
    }
}
