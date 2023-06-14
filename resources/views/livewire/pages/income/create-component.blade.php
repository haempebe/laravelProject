@section('pageTitle', 'Create Income')
@section('button')
    <div class="col-auto ms-auto d-print-none">
        <div class="btn-list">
            <a href="{{ route('income') }}" class="btn d-none d-sm-inline-block">
                <-- Back </a>
        </div>
    </div>
@endsection

<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>
<div>
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
</div>

<div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form wire:submit.prevent="incomeCreate()" autocomplete="off">
                        <div class="row">
                            <div class="{{-- col-8 --}} ">
                                {{-- <div class="card">
                                <div class="card-body"> --}}
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label required">Nama</label>
                                            <input type="text" class="form-control" wire:model="name"
                                                placeholder="Input Username">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label required">Amount</label>
                                            <input type="number" min="0"step="1000" class="form-control"
                                                wire:model="amount" placeholder="Input an Amount">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 mb-0">
                                            <label class="form-label required">Description</label>
                                            <textarea rows="5" class="form-control" placeholder="your description" wire:model="description"
                                                style="height: 150px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                                {{-- </div>
                                </div> --}}
                            </div>
                            {{-- <div class="col-4">
                                <div class="card">
                                    <div class="card-body">
                                        <label class="form-label required">insert evidence</label>
                                        <input type="file" wire:model="image" class="form-control">
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <button type="submit" class="mt-3 btn btn-primary">Create </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
