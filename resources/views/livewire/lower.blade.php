<?php

use function Livewire\Volt\{state, mount};

state(['word']);

mount(function() {
    $this->word_lower = strtolower($this->word);
});

?>

<div>
    入力: {{ $word }} <br>
    小文字: {{ $this->word_lower}}
</div>
