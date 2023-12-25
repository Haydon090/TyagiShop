<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('tyagi.create') }}"> Create New Product</a>
        </div>
    </x-slot>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>size</th>
        </tr>
        @foreach ($tyagi as $tyaga)
        <tr>
            <td>{{ $tyaga->name }}</td>
            <td>{{ $tyaga->description }}</td>
            <td>{{ $tyaga->price }}</td>
            <td>{{ $tyaga->size }}</td>
            <td>
                 <a class="btn btn-info" href="{{ route('tyagi.show',$tyaga->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('tyagi.edit',$tyaga->id) }}">Edit</a>
                <form action="{{ route('tyagi.destroy',$tyaga->id) }}" method="DELETE">

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</x-app-layout>
