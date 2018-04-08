<table class="table {{ $class }}">

		<tr>
			<th> Nama Produk</th><th>Deskripsi</th><th>Quantity</th><th>Gudang</th><th>Pemilik Gudang</th><th>Status</th>
		</tr>
		@foreach($status->barangs  as $object)
		<tr>
		<td>{{$object->nama}}</td>
		<td>{{$object->deskripsi}}</td>
		<td>{{$object->quantity}}</td>
		<td>{{$object->gudangs->lokasigudang}}</td>
		<td>{{$object->gudangs->warehousemans->name}}</td>
		<td>{{$object->status}}</td>
		</tr>
		@endforeach

</table>
