<h1 class="title heading-space">Edit Task</h1>
    <form method="post" action="{{ url('/') }}/{{ $task->id }}">
        @method('patch')
        @csrf()

        <div class="field">
            <label for="task" class="label">
                Task
            </label>
            <div class="control">
            <input type="text" class="input {{ $errors->has('task') ? 'is-danger' : ''}}" name="task" placeholder="Task" value="{{ $task->task}}">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Task</button>
            </div>
        </div>
        @include('template/errors')
    </form>