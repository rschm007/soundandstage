<?php
$resume = get_field("resume");
if ($resume) : ?>
    <a class="flex flex-row items-start justify-center border border-white rounded px-3 py-2 hover:bg-slate-700 hover:text-black transition-all duration-150 ease-in-out mt-2 mb-2" href="<?php echo $resume['url']; ?>">
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M280 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V294.1l-95-95c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9L239 369c9.4 9.4 24.6 9.4 33.9 0L409 233c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-95 95V24zM128.8 304H64c-35.3 0-64 28.7-64 64v80c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V368c0-35.3-28.7-64-64-64H383.2l-48 48H448c8.8 0 16 7.2 16 16v80c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V368c0-8.8 7.2-16 16-16H176.8l-48-48zM432 408a24 24 0 1 0 -48 0 24 24 0 1 0 48 0z" fill="#fff" />
        </svg>

        <p class="text-xl font-bold ml-2">Resume</p>
    </a>
<?php endif; ?>