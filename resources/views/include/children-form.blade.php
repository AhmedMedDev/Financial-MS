 {{-- Child Name --}}
  <div class="form-group">
    <label for="child_name">اسم الطفل <span class="tx-danger">*</span></label>
    <input type="text" class="form-control @error('child_name') is-invalid @enderror" id="child_name" wire:model="child_name">
    @error('child_name') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- Parent --}}
  <div class="form-group">
    <label for="parent">اسم ولى الامر <span class="tx-danger">*</span></label>
    <input type="text" class="form-control @error('parent') is-invalid @enderror" id="parent" wire:model="parent">
    @error('parent') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- Phone --}}
  <div class="form-group">
    <label for="phone">رقم الهاتف <span class="tx-danger">*</span></label>
    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" wire:model="phone">
    @error('phone') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- date--}}
  <div class="form-group">
    <label for="date">تاريخ الالتحاق</label>
    <input type="text" class="form-control @error('date') is-invalid @enderror" wire:model="date" placeholder="YY-MM-DD"></input>
    @error('date') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- date_of_birth--}}
  <div class="form-group">
    <label for="date_of_birth">تاريخ الميلاد  <span class="tx-danger">*</span></label>
    <input type="text" class="form-control @error('date_of_birth') is-invalid @enderror" wire:model="date_of_birth" placeholder="YY-MM-DD"></input>
    @error('date_of_birth') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- gender--}}
  <div class="form-group">
    <label for="gender">النوع  <span class="tx-danger">*</span></label>
    <select class="custom-select  @error('gender') is-invalid @enderror" id="inlineFormCustomSelectPref" wire:model="gender" >
        <option selected value="ذكر" > ذكر</option>
        <option value="انثى" > انثى</option>
    </select>
    @error('gender') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- nationality--}}
  <div class="form-group">
    <label for="nationality">الجنسية  <span class="tx-danger">*</span></label>
    <input type="text" class="form-control @error('nationality') is-invalid @enderror" wire:model="nationality"></input>
    @error('nationality') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- national_id --}}
  <div class="form-group">
    <label for="national_id">الرقم القومى/جواز السفر <span class="tx-danger">*</span></label>
    <input type="text" class="form-control @error('national_id') is-invalid @enderror" id="national_id" wire:model="national_id">
    @error('national_id') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- religion--}}
  <div class="form-group">
    <label for="religion">الديانة  <span class="tx-danger">*</span></label>
    <select class="custom-select  @error('religion') is-invalid @enderror" id="inlineFormCustomSelectPref" wire:model="religion">
      <option selected value="مسلم" > مسلم</option>
      <option value="مسيحى" > مسيحى</option>
    </select>
    @error('religion') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- num_of_bro--}}
  <div class="form-group">
    <label for="num_of_bro">ع الاخوات  <span class="tx-danger">*</span></label>
    <input type="number" class="form-control @error('num_of_bro') is-invalid @enderror" wire:model="num_of_bro"></input>
    @error('num_of_bro') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- rank_of_bro--}}
  <div class="form-group">
    <label for="rank_of_bro">ترتيبه بينهم  <span class="tx-danger">*</span></label>
    <input type="number" class="form-control @error('rank_of_bro') is-invalid @enderror" wire:model="rank_of_bro"></input>
    @error('rank_of_bro') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- monthly_expenses --}}
  <div class="form-group">
    <label for="monthly_expenses">المصروفات الشهرية <span class="tx-danger">*</span></label>
    <input type="number" class="form-control @error('monthly_expenses') is-invalid @enderror" id="monthly_expenses" wire:model="monthly_expenses">
    @error('monthly_expenses') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- bus_expenses --}}
  <div class="form-group">
    <label for="bus_expenses">مصروفات الباص </label>
    <input type="number" class="form-control @error('bus_expenses') is-invalid @enderror" id="bus_expenses" wire:model="bus_expenses">
    @error('bus_expenses') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- Address--}}
  <div class="form-group">
    <label for="address">العنوان <span class="tx-danger">*</span></label>
    <textarea type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Textarea" rows="3" wire:model="address"></textarea>
    @error('address') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- notes--}}
  <div class="form-group">
    <label for="notes">ملاحظات الاخصائى</label>
    <textarea type="text" class="form-control @error('notes') is-invalid @enderror" placeholder="Textarea" rows="3" wire:model="notes"></textarea>
    @error('notes') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>