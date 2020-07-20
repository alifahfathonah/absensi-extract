<form action="{{ route('agenda.destroy', $agenda->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-sm btn-icon btn-icon-sm btn-elevate btn-elevate-air" title="Hapus" onclick="return confirm('Hapus data ini ?')">
        <i class="fa fa-trash text-danger"></i>
    </button>

    <a href="{{ route('agenda.edit', $agenda->id) }}" class="btn btn-sm btn-icon btn-icon-sm btn-elevate btn-elevate-air" title="Ubah">
        <i class="fa fa-edit text-warning"></i>
    </a>
</form>
