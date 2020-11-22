@extends('layouts.dashboard')

@section('content')
  <div class="dashboard-content">
    <h1 class="dashboard-title">
      {{auth()->user()->email}}
    </h1>
    <div class="tabs">
      <div class="tabs-nav"></div>
      <div class="tabs-container">
        <div class="tabs-item">
          <div class="tabs-active"></div>
          <a class="tab-link">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M9.00016 9.93738C11.4943 9.93738 13.3752 7.67666 13.3752 4.67863C13.3752 2.27791 11.3717 0.25 9.00016 0.25C6.62853 0.25 4.625 2.27791 4.625 4.67863C4.625 7.67669 6.50588 9.93738 9.00016 9.93738ZM9.00016 1.77984C10.5132 1.77984 11.8408 3.13234 11.8408 4.67438C11.8408 6.80266 10.6194 8.40759 9.00016 8.40759C7.3805 8.40759 6.1595 6.80269 6.1595 4.67438C6.1595 3.13234 7.487 1.77984 9.00016 1.77984ZM17.2045 14.5073C17.0663 13.3266 16.3622 12.4926 15.2751 12.2266C14.908 12.136 13.6952 11.8886 13.0345 11.7548L12.3985 9.9375C11.9901 10.2877 11.5372 10.5729 11.0456 10.7832L11.8589 13.1064L12.2938 13.1933C15.1321 13.7616 15.5422 13.6918 15.6587 14.6879C15.7149 15.171 15.808 16.5048 15.8791 17.75H17.4379C17.3653 16.5048 17.2664 15.04 17.2045 14.5073ZM4.96603 11.7548C4.30562 11.8886 3.09309 12.136 2.72719 12.2263C1.63828 12.4926 0.93425 13.3266 0.795969 14.508C0.734 15.04 0.635125 16.5048 0.5625 17.75H2.12138C2.32047 14.637 2.24519 13.9507 3.09859 13.7425C3.47366 13.6495 4.96847 13.3433 5.70669 13.1956L6.14156 13.1075L6.95491 10.7838C6.46356 10.5734 6.01034 10.288 5.60234 9.93778L4.96603 11.7548Z"/>
            </svg>
            Leads
          </a>
        </div>

        <div class="tabs-item active">
          <div class="tabs-active"></div>
          <a class="tab-link">
            <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.0625 3.0625V14.9375H12.125V3.0625H10.5625V13.375H4.625V3.0625H3.0625ZM7.38459 9.58787C6.84475 9.58787 6.3525 9.41316 5.99512 9.23844L5.73328 10.3421C6.04272 10.5008 6.58259 10.6517 7.13863 10.6755V11.4139H8.04347V10.6041C8.99622 10.4373 9.52022 9.82591 9.52022 9.08769C9.52022 8.36519 9.15522 7.91259 8.15488 7.58712C7.48775 7.34894 7.218 7.19803 7.218 6.9995C7.218 6.82494 7.36081 6.65816 7.82928 6.65816C8.43262 6.65816 8.81378 6.84081 9.028 6.92809L9.28222 5.87219C9.00422 5.75303 8.63128 5.64194 8.08319 5.61812V4.95116H7.17834V5.68159C6.27319 5.86425 5.773 6.43584 5.773 7.15834C5.773 7.96019 6.38428 8.36516 7.24181 8.64303C7.83722 8.82569 8.06731 8.97644 8.06731 9.22256C8.06728 9.47663 7.78956 9.58787 7.38459 9.58787ZM15.7188 0.25H2.28125C1.16125 0.25 0.25 1.16125 0.25 2.28125V5.71875C0.25 6.67719 0.918094 7.48075 1.8125 7.69322V5.71875V4.93747V2.28125C1.8125 2.02278 2.02278 1.8125 2.28125 1.8125H15.7188C15.9772 1.8125 16.1875 2.02278 16.1875 2.28125V4.93747V5.71875V7.69322C17.0819 7.48075 17.75 6.67719 17.75 5.71875V2.28125C17.75 1.16125 16.8388 0.25 15.7188 0.25ZM13.375 16.1875H5.5625V17.75H14.9375V3.0625H13.375V16.1875Z" />
            </svg>
            Payments
          </a>
        </div>

        <div class="tabs-item">
          <div class="tabs-active"></div>
          <a class="tab-link">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.99984 17.3333V14H2.33317C1.414 14 0.666504 13.2525 0.666504 12.3333V2.33334C0.666504 1.41417 1.414 0.666672 2.33317 0.666672H15.6665C16.5857 0.666672 17.3332 1.41417 17.3332 2.33334V12.3333C17.3332 13.2525 16.5857 14 15.6665 14H8.44401L3.99984 17.3333ZM2.33317 2.33334V12.3333H5.6665V14L7.88901 12.3333H15.6665V2.33334H2.33317Z" />
            </svg>
            Personal manager
          </a>
        </div>

      </div>
    </div>

    <div class="dashboard-info">
      <div class="payments-container">
        <div class="payments-wrapper">
          <p>Top balance:<span>$ 3.567</span></p>
          <button>Top Up</button>
        </div>

      </div>

      <div class="table-info">
        <table class="payments-table">
          <thead>
          <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Payment method</th>
            <th>Status</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>9/23/16</td>
            <td>05:51 am</td>
            <td>Gillette</td>
            <td><span class="status-success">Complete</span></td>
          </tr>
          <tr>
            <td>9/23/16</td>
            <td>05:51 am</td>
            <td>Gillette</td>
            <td><span class="status-error">Error</span></td>
          </tr>
          <tr>
            <td>9/23/16</td>
            <td>05:51 am</td>
            <td>Gillette</td>
            <td><span class="status-pending">In-progress</span></td>
          </tr>
          </tbody>
        </table>

      </div>

    </div>
  </div>
@endsection
