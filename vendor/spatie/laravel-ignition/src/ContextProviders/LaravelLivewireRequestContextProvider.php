<?php

namespace Spatie\LaravelIgnition\ContextProviders;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Livewire\LivewireManager;
<<<<<<< HEAD
<<<<<<< HEAD
use Livewire\Mechanisms\ComponentRegistry;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

class LaravelLivewireRequestContextProvider extends LaravelRequestContextProvider
{
    public function __construct(
        Request $request,
        protected LivewireManager $livewireManager
    ) {
        parent::__construct($request);
    }

    /** @return array<string, string> */
    public function getRequest(): array
    {
        $properties = parent::getRequest();

        $properties['method'] = $this->livewireManager->originalMethod();
        $properties['url'] = $this->livewireManager->originalUrl();

        return $properties;
    }

    /** @return array<int|string, mixed> */
    public function toArray(): array
    {
        $properties = parent::toArray();

        $properties['livewire'] = $this->getLivewireInformation();

        return $properties;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /** @return array<int, mixed> */
    protected function getLivewireInformation(): array
    {
        if ($this->request->has('components')) {
            $data = [];

            foreach ($this->request->get('components') as $component) {
                $snapshot = json_decode($component['snapshot'], true);

                $class = app(ComponentRegistry::class)->getClass($snapshot['memo']['name']);

                $data[] = [
                    'component_class' => $class ?? null,
                    'data' => $snapshot['data'],
                    'memo' => $snapshot['memo'],
                    'updates' => $this->resolveUpdates($component['updates']),
                    'calls' => $component['calls'],
                ];
            }

            return $data;
        }

=======
    /** @return array<string, mixed> */
    protected function getLivewireInformation(): array
    {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    /** @return array<string, mixed> */
    protected function getLivewireInformation(): array
    {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        /** @phpstan-ignore-next-line */
        $componentId = $this->request->input('fingerprint.id');

        /** @phpstan-ignore-next-line */
        $componentAlias = $this->request->input('fingerprint.name');

        if ($componentAlias === null) {
            return [];
        }

        try {
            $componentClass = $this->livewireManager->getClass($componentAlias);
        } catch (Exception $e) {
            $componentClass = null;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        /** @phpstan-ignore-next-line */
        $updates = $this->request->input('updates') ?? [];

        /** @phpstan-ignore-next-line */
        $updates = $this->request->input('updates') ?? [];

        return [
            [
                'component_class' => $componentClass,
                'component_alias' => $componentAlias,
                'component_id' => $componentId,
                'data' => $this->resolveData(),
                'updates' => $this->resolveUpdates($updates),
            ],
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return [
            'component_class' => $componentClass,
            'component_alias' => $componentAlias,
            'component_id' => $componentId,
            'data' => $this->resolveData(),
            'updates' => $this->resolveUpdates(),
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        ];
    }

    /** @return array<string, mixed> */
    protected function resolveData(): array
    {
        /** @phpstan-ignore-next-line */
        $data = $this->request->input('serverMemo.data') ?? [];

        /** @phpstan-ignore-next-line */
        $dataMeta = $this->request->input('serverMemo.dataMeta') ?? [];

        foreach ($dataMeta['modelCollections'] ?? [] as $key => $value) {
            $data[$key] = array_merge($data[$key] ?? [], $value);
        }

        foreach ($dataMeta['models'] ?? [] as $key => $value) {
            $data[$key] = array_merge($data[$key] ?? [], $value);
        }

        return $data;
    }

    /** @return array<string, mixed> */
<<<<<<< HEAD
<<<<<<< HEAD
    protected function resolveUpdates(array $updates): array
=======
    protected function resolveUpdates(): array
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    protected function resolveUpdates(): array
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        /** @phpstan-ignore-next-line */
        $updates = $this->request->input('updates') ?? [];

        return array_map(function (array $update) {
            $update['payload'] = Arr::except($update['payload'] ?? [], ['id']);

            return $update;
        }, $updates);
    }
}
