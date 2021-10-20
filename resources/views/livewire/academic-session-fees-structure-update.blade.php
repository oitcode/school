<div class="card">
  <div class="card-body">
  
    <h2 class="h5 mb-3">Update fees structure</h2>
  
    <div class="row">
      <div class="col-md-6">
        <table class="table table-sm table-bordered">
          <thead>
            <tr>
              <th class="text-info">
                Class
              </th>
              <th class="text-info">
                Monthly fees
              </th>
            </tr>
          </thead>
          <tbody>
           <tr>
             <th>Nursery</th>
             <td class="p-0">
              <input type="text" class="form-control" wire:model.defer="nursery">
              @error('nursery') <span class="text-danger">{{ $message }}</span> @enderror
             </td>
           </tr>
  
           <tr>
             <th>LKG</th>
             <td class="p-0">
              <input type="text" class="form-control" wire:model.defer="lkg">
              @error('lkg') <span class="text-danger">{{ $message }}</span> @enderror
             </td>
           </tr>
  
           <tr>
             <th>UKG</th>
             <td class="p-0">
              <input type="text" class="form-control" wire:model.defer="ukg">
              @error('ukg') <span class="text-danger">{{ $message }}</span> @enderror
             </td>
           </tr>
  
           <tr>
             <th>One</th>
             <td class="p-0">
              <input type="text" class="form-control" wire:model.defer="one">
              @error('one') <span class="text-danger">{{ $message }}</span> @enderror
             </td>
           </tr>
  
           <tr>
             <th>Two</th>
             <td class="p-0">
              <input type="text" class="form-control" wire:model.defer="two">
              @error('two') <span class="text-danger">{{ $message }}</span> @enderror
             </td>
           </tr>
  
           <tr>
             <th>Three</th>
             <td class="p-0">
              <input type="text" class="form-control" wire:model.defer="three">
              @error('three') <span class="text-danger">{{ $message }}</span> @enderror
             </td>
           </tr>
  
           <tr>
             <th>Four</th>
             <td class="p-0">
              <input type="text" class="form-control" wire:model.defer="four">
              @error('four') <span class="text-danger">{{ $message }}</span> @enderror
             </td>
           </tr>
  
           <tr>
             <th>Five</th>
             <td class="p-0">
              <input type="text" class="form-control" wire:model.defer="five">
              @error('five') <span class="text-danger">{{ $message }}</span> @enderror
             </td>
           </tr>
  
           <tr>
             <th>Six</th>
             <td class="p-0">
              <input type="text" class="form-control" wire:model.defer="six">
              @error('six') <span class="text-danger">{{ $message }}</span> @enderror
             </td>
           </tr>
  
           <tr>
             <th>Seven</th>
             <td class="p-0">
              <input type="text" class="form-control" wire:model.defer="seven">
              @error('seven') <span class="text-danger">{{ $message }}</span> @enderror
             </td>
           </tr>
  
           <tr>
             <th>Eight</th>
             <td class="p-0">
              <input type="text" class="form-control" wire:model.defer="eight">
              @error('eight') <span class="text-danger">{{ $message }}</span> @enderror
             </td>
           </tr>
  
           <tr>
             <th>Nine</th>
             <td class="p-0">
              <input type="text" class="form-control" wire:model.defer="nine">
              @error('nine') <span class="text-danger">{{ $message }}</span> @enderror
             </td>
           </tr>
  
           <tr>
             <th>Ten</th>
             <td class="p-0">
              <input type="text" class="form-control" wire:model.defer="ten">
              @error('ten') <span class="text-danger">{{ $message }}</span> @enderror
             </td>
           </tr>
  
          </tbody>
        </table>
      </div>
    </div>
  
    <button type="submit" class="btn btn-primary" wire:click="update">Update</button>
    <button type="submit" class="btn btn-danger" wire:click="$emit('exitFeesStructureUpdateMode')">Cancel</button>
  </div>
</div>
