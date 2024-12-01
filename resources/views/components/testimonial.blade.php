<div class="flex w-full p-4 max-w-lg flex-col rounded-lg bg-white shadow-sm border border-slate-200 my-6">
    <div class="flex items-center gap-4 text-slate-800">
      <img src="{{ $image }}" alt="Tania Andrew" class="relative inline-block h-[58px] w-[58px] !rounded-full  object-cover object-center" />
      <div class="flex w-full flex-col">
        <div class="flex items-center justify-between">
          <h5 class="text-xl font-semibold text-slate-800">
            {{ $name }}
          </h5>
        </div>
        <p class="text-xs uppercase font-bold text-slate-500 mt-0.5">
          {{ $position }}
        </p>
      </div>
    </div>
    <div class="mt-6">
      <p class="text-base text-slate-600 font-light leading-normal">
        &quot; {{ $description }} &quot;
      </p>
    </div>
  </div>
