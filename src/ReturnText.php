<?php

declare(strict_types=1);

namespace Alte0\OtusTestApp;

/**
 * Class ReturnText
 * @package
 */
class ReturnText
{
    /** Хранит переданный текст
     * @var string
     */
    private string $text;

    /**
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->setText($text);
    }

    /** Получаем переданное значение
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /** Устанавливаем значение переменной
     * @param string $text
     * @return void
     */
    private function setText(string $text): void
    {
        $this->text = $text;
    }
}
