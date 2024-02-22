<h1>Create category</h1>

<form action="{{ route('category.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="name">
    <select name="parent_id">
        <option value="">Sélectionner un parent si besoin</option>
        @if($parent_categories)
            @foreach($parent_categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        @endif
    </select>
    <input type="submit" value="Ajouter">

</form>