<x-modals.form
  buttonName="New Todo"
  title="Create Todo"
  :action="route('todos.store', $project->slug)"
  method="POST"
>

  <x-inputs.text
    label="Description"
    name="description"
    required="true"
  />

  <x-inputs.text
    label="Requested By"
    name="requested_by"
  />

  <x-inputs.select
    label="Difficulty"
    name="difficulty"
  >
    @foreach ($difficulties as $difficulty)
      <option value="{{ strtoupper($difficulty->name) }}">{{ strtoupper($difficulty->name) }}</option>
    @endforeach
  </x-inputs.select>

  <x-inputs.date
    label="Deadline"
    name="deadline"
    :minDate="date('Y-m-d', strtotime(now()->addDays(1)))"
  />

</x-modals>