@section('pageTitle', 'Income')
@section('button')

    <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">

            <a href="{{ route('income.create') }}" class="btn d-none d-sm-inline-block">
                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 5l0 14"></path>
                    <path d="M5 12l14 0"></path>
                </svg>
                Create New Income
            </a>

        </div>
    </div>

@endsection
<div>

    <div class="row row-cards">
        <div class="col-lg-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody class="btn d-none d-sm">


                            <tr>
                                <td>#</td>
                                <td class="text-muted">
                                    name
                                </td>
                                <td class="d-flex gap-1">
                                    <a href="{{-- url('perpus/categories/' . $item->name . '/edit') --}}" class="btn">Ubah</a>
                                    <form class="d-inline" onsubmit="{{-- return confirm('sure to delete this data') --}}"
                                        action="{{-- url('perpus/categories/' . $item->id . '/delete') --}}" method="post">
                                        {{-- @csrf
                                                @method('DELETE') --}}
                                        <button class="btn">Hapus</button>
                                    </form>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
