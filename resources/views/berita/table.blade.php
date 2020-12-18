<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Isi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datas as $data)
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$data->judul}}</td>
        <td>{{$data->isi}}</td>
        <td>
          <a href="{{ route('berita.show',$data->id) }}" class="btn btn-info"> Detail </a>
        </td>
        </tr>
    @endforeach()
  </tbody>
</table>














