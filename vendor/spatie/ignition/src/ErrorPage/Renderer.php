<?php

namespace Spatie\Ignition\ErrorPage;

class Renderer
{
    /**
     * @param array<string, mixed> $data
     *
     * @return void
     */
<<<<<<< HEAD
    public function render(array $data, string $viewPath): void
    {
        $viewFile = $viewPath;
=======
    public function render(array $data): void
    {
        $viewFile = __DIR__ . '/../../resources/views/errorPage.php';
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        extract($data, EXTR_OVERWRITE);

        include $viewFile;
    }
<<<<<<< HEAD

    public function renderAsString(array $date, string $viewPath): string
    {
        ob_start();

        $this->render($date, $viewPath);

        return ob_get_clean();
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
