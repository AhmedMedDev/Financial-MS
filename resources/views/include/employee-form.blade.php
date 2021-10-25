  {{-- Name --}}
  <div class="form-group">
    <label>اسم الموظف <span class="tx-danger">*</span></label>
    <input type="text" class="form-control @error('name') is-invalid @enderror " id="name" wire:model="name" >
    @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>

  {{-- Postion --}}
  <div class="form-group">
    <label>الوظيفة <span class="tx-danger">*</span></label>
    <input type="text" class="form-control @error('position') is-invalid @enderror " id="position" wire:model="position" >
    @error('position') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>

    {{-- qualification --}}
    <div class="form-group">
      <label>المؤهل <span class="tx-danger">*</span></label>
      <input type="text" class="form-control @error('qualification') is-invalid @enderror " id="qualification" wire:model="qualification" >
      @error('qualification') <span class="error text-danger">{{ $message }}</span> @enderror
    </div>

  {{-- Phone --}}
  <div class="form-group">
    <label>رقم الهاتف <span class="tx-danger">*</span></label>
    <input type="text" class="form-control @error('phone') is-invalid @enderror " id="phone" wire:model="phone" >
    @error('phone') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  
  {{-- Salary --}}
  <div class="form-group">
    <label>المرتب <span class="tx-danger">*</span></label>
    <input type="number" class="form-control @error('salary') is-invalid @enderror " id="salary" wire:model="salary" >
    @error('salary') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>

  {{-- Email --}}
  <div class="form-group">
    <label>البريد الالكترونى</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror " id="email" wire:model="email" >
    @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>

  {{-- start_date--}}
  <div class="form-group">
    <label for="start_date">تاريخ الالتحاق</label>
    <input type="text" class="form-control @error('start_date') is-invalid @enderror" wire:model="start_date" placeholder="YY-MM-DD"></input>
    @error('start_date') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  
  {{-- date_of_birth--}}
  <div class="form-group">
    <label for="date_of_birth">تاريخ الميلاد  <span class="tx-danger">*</span></label>
    <input type="text" class="form-control @error('date_of_birth') is-invalid @enderror" wire:model="date_of_birth" placeholder="YY-MM-DD"></input>
    @error('date_of_birth') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>

  {{-- Avatar --}}
  {{-- <div class="col-sm-12 col-md-12">
    <input type="file" class="dropify" data-height="200" />
  </div> --}}