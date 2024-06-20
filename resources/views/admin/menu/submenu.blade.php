<tr>
    <td style="padding-left: {{ $level * 30 }}px;">{{ $menu->name }}</td>
    <td>{{ $menu->parent ? $menu->parent->name : 'N/A' }}</td>
    <td><div class="card-body" style="display: inline">
        <input type="checkbox" name="my-checkbox" @checked($menu->is_active==true) data-bootstrap-switch data-off-color="danger" data-on-color="success">
      </div>
    </td>
    <td>
        <!-- Add any actions like edit/delete here -->
        <a href="{{ route('admin.menu.edit', $menu->id) }}" class="btn btn-primary btn-sm">Edit</a>
        <form action="{{ route('admin.menu.destroy', $menu->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
        
    </td>
</tr>
@if($menu->children->isNotEmpty())
    @foreach($menu->children as $child)
        @include('admin.menu.submenu', ['menu' => $child, 'level' => $level + 1])
    @endforeach
@endif
