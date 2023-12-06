<form action="{{ route('update.approval') }}" method="POST" id="form-approval">
    @csrf
    @foreach ($data as $item)
        <input type="hidden" name="idApplication" value="{{ $item->id }}">
    @endforeach
    <div class="row">
        <div class="col-12 form-group mb-2">
            <label for="approvalApplication" class="form-label">Process</label>
            <select class="form-control" id="approvalApplication" name="approvalApplication">
                @foreach ($data as $item)
                    @if ($item->status === 'processed')
                        <option value="interviewed">Interview</option>
                    @else
                        <option value="accepted">Lamaran Diterima</option>
                    @endif
                    <option value="rejected">Rejected</option>
                @endforeach
            </select>
        </div>
        @if ($item->status === 'processed')
        <div id="interviewApplication" style="display: none">
            <div class="col-12 form-group mb-2">
                <label for="interviewer" class="form-label">Interviewer</label>
                <input type="text" class="form-control" name="interviewer" id="interviewer">
            </div>
            <div class="col-12 form-group mb-2">
                <label for="interview_date" class="form-label">Interview Date</label>
                <input type="date" class="form-control" name="interview_date">
            </div>
            <div class="col-12 form-group mb-2">
                <label for="interview_location" class="form-label">Interview Location (Address/Link Meet)</label>
                <input type="text" class="form-control" name="interview_location" id="interview_location">
            </div>
        </div>
        @endif
        <div class="col-12 text-end">
            <button type="submit" form="form-approval" class="btn bg-gradient-primary">Save changes</button>
        </div>
    </div>
</form>