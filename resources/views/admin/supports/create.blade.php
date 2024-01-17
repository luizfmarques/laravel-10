<h1>Novo suporte</h1>

<x-alert/>

<form action="{{ route('supports.store') }}" method="POST">
   
   @include('admin.supports.partials.form')

</form>