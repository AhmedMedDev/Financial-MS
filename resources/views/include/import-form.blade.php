{{--  --}}
<div class="form-group">
    <label for="amount">اسم العميل</label>
    <input type="text" class="form-control" id="employee" wire:model="client">
    @error('client') <span class="error text-danger">{{ $message }}</span> @enderror
</div>
{{--  --}}
<div class="form-group">
    <label for="amount">المبلغ</label>
    <input type="number" class="form-control" id="amount" wire:model="amount">
    @error('amount') <span class="error text-danger">{{ $message }}</span> @enderror
</div>
{{--  --}}
<div class="form-group">
    <label for="amount">السبب</label>
    <input type="text" class="form-control" id="reason" wire:model="reason">
    @error('reason') <span class="error text-danger">{{ $message }}</span> @enderror
</div>
{{--  --}}
<div class="form-group">
    <div class="row row-sm">
        <div class="input-group col-md-12">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                </div>
            </div>
            <input class="form-control" id="datetimepicker2" type="text" placeholder="YY-MM-DD: TIME">
        </div>
    </div>
</div>
{{--  --}}