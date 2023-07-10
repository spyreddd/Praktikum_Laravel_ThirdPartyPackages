<div class="d-flex">
    <a href="{{ route('employees.show', ['employee' => $employee->id]) }}" class="btn btn-outline-dark btn-sm me-2" style="border-color: black; color: blue;"><i class="bi-person-lines-fill"></i></a>
    <a href="{{ route('employees.edit', ['employee' => $employee->id]) }}" class="btn btn-outline-dark btn-sm me-2" style="border-color: black; color: magenta;"><i class="bi-pencil-square"></i></a>

    <div>
        <form action="{{ route('employees.destroy', ['employee' => $employee->id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-dark btn-sm me-2 btn-delete" style="border-color: black; color: red;" data-name="{{ $employee->firstname.' '.$employee->lastname }}"><i class="bi-trash"></i></button>
        </form>
    </div>
</div>
