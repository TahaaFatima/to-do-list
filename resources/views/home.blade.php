<h1 class="title heading-space">To Do List</h1>
<div>
    <div class="box">
        <form method="post">
            @csrf
            <div class="field">
                <div class="control">
                    <input type="text" class="input {{$errors->has('task') ? 'is-danger' : ''}}" name="task" placeholder="New Task" value="{{old('task')}}">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">
                        Add Task
                    </button>
                </div>
            </div>
            @include('template/errors')
        </form>
    </div>
    @if($tasks->count())
    <div class="box">
        @foreach($tasks as $task)
        <div>
            <form method="post" action="{{url('/')}}/{{ $task->id }}">
                @method('patch')
                @csrf
                <label for="completed" class="checkbox {{ $task->completed ? 'is-complete' : ''}}">
                    <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                    {{ $task->task }}
                </label>
            </form>
            <div class="field is-grouped">
                @if(!$task->completed)
                    <div class="control">
                        <a href="{{url('/')}}/{{ $task->id }}/edit" class="button is-link is-light">
                            <span class="icon">
                                <i class="fas fa-pencil-alt"></i>
                            </span>
                        </a>
                    </div>
                @endif
                <form method="post" action="{{url('/')}}/{{ $task->id }}">
                    @method('delete')
                    @csrf
                    <div class="control">
                        <button type="submit" class="button is-link is-light">
                            <span class="icon">
                                <i class="fas fa-trash"></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>