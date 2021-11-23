<?php

namespace App\Enums;

class ArticleDetailEnum
{
    const HEADER = 'header';
    const GRATITUDE = 'gratitude';
    const LIBRARY_LIST = 'library_list';
    const SECTION_SLUG = 'section_slug';
    const MAIN_TEXT = 'main_text';
    const PICTURE = 'picture';
    const SLIDER = 'slider';
    const FOOTER = 'footer';

    const TYPES = [
        self::HEADER,
        self::GRATITUDE,
        self::LIBRARY_LIST,
        self::SECTION_SLUG,
        self::MAIN_TEXT,
        self::PICTURE,
        self::SLIDER,
        self::FOOTER,
    ];
}
