<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ ("You're logged in!") }}
                    <form action="{{route('apartament.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputName" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputLocal" class="form-label">Local</label>
                            <input type="text" class="form-control" id="exampleInputLocal" name="local">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputBuilding" class="form-label">Building</label>
                            <input type="text" class="form-control" id="exampleInputBuilding" name="building">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputRoomNumber" class="form-label">Room Number</label>
                            <input type="number" class="form-control" id="exampleInputRoomNumber" name="room_number">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputQuantityRooms" class="form-label">Quantity Rooms</label>
                            <input type="number" class="form-control" id="exampleInputQuantityRooms" name="quantity_rooms">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputArea" class="form-label">Area</label>
                            <input type="number" step="0.01" class="form-control" id="exampleInputArea" name="area">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputParkingNumber" class="form-label">Parking Number</label>
                            <input type="text" class="form-control" id="exampleInputParkingNumber" name="parking_number">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="extraNanny" name="extra_nanny">
                            <label class="form-check-label" for="extraNanny">Extra Nanny</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="extraLaundry" name="extra_laundry">
                            <label class="form-check-label" for="extraLaundry">Extra Laundry</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="extraCabinet" name="extra_cabinet">
                            <label class="form-check-label" for="extraCabinet">Extra Cabinet</label>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputFileOwnerDocument" class="form-label">File Owner Document</label>
                            <input type="file" class="form-control" id="exampleInputFileOwnerDocument" name="file_owner_document">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputFilePowerOfAttorney" class="form-label">File Power of Attorney</label>
                            <input type="file" class="form-control" id="exampleInputFilePowerOfAttorney" name="file_power_of_attorney">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputFilePropertyManagementLetter" class="form-label">File Property Management Letter</label>
                            <input type="file" class="form-control" id="exampleInputFilePropertyManagementLetter" name="file_property_management_letter">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputFileCommercialOffer" class="form-label">File Commercial Offer</label>
                            <input type="file" class="form-control" id="exampleInputFileCommercialOffer" name="file_commercial_offer">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputFileContacts" class="form-label">File Contacts</label>
                            <input type="file" class="form-control" id="exampleInputFileContacts" name="file_contacts">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputDEWAAccount" class="form-label">DEWA Account</label>
                            <input type="text" class="form-control" id="exampleInputDEWAAccount" name="DEWA_account">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputDEWAAccountPassword" class="form-label">DEWA Account Password</label>
                            <input type="password" class="form-control" id="exampleInputDEWAAccountPassword" name="DEWA_account_password">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputACAccount" class="form-label">AC Account</label>
                            <input type="text" class="form-control" id="exampleInputACAccount" name="AC_account">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputACAccountPassword" class="form-label">AC Account Password</label>
                            <input type="password" class="form-control" id="exampleInputACAccountPassword" name="AC_account_password">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputInternetAccount" class="form-label">Internet Account</label>
                            <input type="text" class="form-control" id="exampleInputInternetAccount" name="internet_account">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputInternetAccountPassword" class="form-label">Internet Account Password</label>
                            <input type="password" class="form-control" id="exampleInputInternetAccountPassword" name="internet_account_password">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputGASSupplier" class="form-label">GAS Supplier</label>
                            <input type="text" class="form-control" id="exampleInputGASSupplier" name="GAS_supplier">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputGASAccount" class="form-label">GAS Account</label>
                            <input type="text" class="form-control" id="exampleInputGASAccount" name="GAS_account">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputApartmentPrice" class="form-label">Apartment Price</label>
                            <input type="number" step="0.01" class="form-control" id="exampleInputApartmentPrice" name="apartment_price">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputInvest" class="form-label">Invest</label>
                            <input type="number" step="0.01" class="form-control" id="exampleInputInvest" name="invest">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputRentalPriceSigin" class="form-label">Rental Price Sigin</label>
                            <input type="number" step="0.01" class="form-control" id="exampleInputRentalPriceSigin" name="rental_price_sigin">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputCommission" class="form-label">Commission</label>
                            <input type="number" step="0.01" class="form-control" id="exampleInputCommission" name="commission">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="communalPayments" name="communal_payments">
                            <label class="form-check-label" for="communalPayments">Communal Payments</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
