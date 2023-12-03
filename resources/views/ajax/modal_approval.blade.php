<form action="{{ route ('update.approval') }}" method="POST" id="form-approval">
    @csrf
    @foreach ($data as $item)
        <input type="hidden" name="idApplication" value="{{ $item->id }}">
    @endforeach
    <div class="row">
        <div class="col-12 form-group">
            <select class="form-control" id="approvalApplication" name="approvalApplication">
                @foreach ($data as $item)
                    @if ($item->status === 'processed')
                        <option value="approved">Proses Berkas</option>
                    @elseif ($item->status === 'approved')
                        <option value="interviewed">Interview</option>
                    @else
                        <option value="accepted">Lamaran Diterima</option>
                    @endif
                    <option>Rejected</option>
                @endforeach
            </select>
        </div>
        <div class="col-12 text-end">
            <button type="submit" form="form-approval" class="btn bg-gradient-primary">Save changes</button>
        </div>
    </div>
</form>