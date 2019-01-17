<?php

return [
	
	'user-management' => [
		'title' => 'Quản lý người dùng',
		'fields' => [
		],
	],
	
	'permissions' => [
		'title' => 'Phân quyền',
		'fields' => [
			'title' => 'Tiêu đề',
		],
	],
	
	'roles' => [
		'title' => 'Vi trò',
		'fields' => [
			'title' => 'tiêu đề',
			'permission' => 'Phân quyền',
		],
	],
	
	'users' => [
		'title' => 'Người dùng',
		'fields' => [
			'name' => 'Họ tên',
			'email' => 'Email',
			'password' => 'Mật khẩu',
			'role' => 'Vai trò',
			'remember-token' => 'Lưu mã',
		],
	],
	
	'properties' => [
		'title' => 'Thành phần',
		'fields' => [
			'name' => 'Họ tên',
			'address' => 'Địa chỉ',
			'photo' => 'Ảnh',
		],
	],

    'tenants' => [
        'title' => 'Khách thuê trọ',
        'fields' => [
            'property' => 'Tính chất',
            'name' => 'Tên',
            'email' => 'Email',
        ],
    ],

	'documents' => [
		'title' => 'Tài liệu',
		'fields' => [
			'property' => 'Tính chất',
			'user' => 'Người dùng',
			'document' => 'Tài liệu',
			'name' => 'Tên',
		],
	],
	
	'notes' => [
		'title' => 'Ghi chú',
		'fields' => [
			'property' => 'Thành phần',
			'user' => 'Người dùng',
			'note-text' => 'Nội dung ghi chú',
		],
	],
	'app_create' => 'Tạo mới',
	'app_save' => 'Lưu lại',
	'app_edit' => 'Sửa',
	'app_restore' => 'Khôi phục',
	'app_permadel' => 'Xóa vĩnh viễn',
	'app_all' => 'Tất cả',
	'app_trash' => 'Rác',
	'app_view' => 'Xem',
	'app_update' => 'Cập nhật',
	'app_list' => 'Danh sách',
	'app_no_entries_in_table' => 'Không có mục nào trong bảng',
	'app_custom_controller_index' => 'Tùy chỉnh điều khiển.',
	'app_logout' => 'Đăng xuất',
	'app_add_new' => 'Thêm mới',
	'app_are_you_sure' => 'Bạn chắc chắn?',
	'app_back_to_list' => 'Trở lại danh sách',
	'app_dashboard' => 'Bảng điều khiển',
	'app_delete' => 'Xóa',
	'app_delete_selected' => 'Xóa mục đã lựa chọn',
	'app_category' => 'Danh mục',
	'app_categories' => 'Thể loại',
	'app_sample_category' => 'Mẫu danh mục',
	'app_questions' => 'Câu hỏi',
	'app_question' => 'Câu hỏi',
	'app_answer' => 'Câu trả lời',
	'app_sample_question' => 'Mẫu câu hỏi',
	'app_sample_answer' => 'Mẫu câu trả lời',
	'app_faq_management' => 'Quản lý câu hỏi thường gặp',
	'app_administrator_can_create_other_users' => 'Người quản lý (có thẻ tạo người dùng khác)',
	'app_simple_user' => 'Mẫu người dùng',
	'app_title' => 'Tiêu đề',
	'app_roles' => 'Vai trò',
	'app_role' => 'Vai trò',
	'app_user_management' => 'Quản lý người dùng',
	'app_users' => 'Người dùng',
	'app_user' => 'Người dùng',
	'app_name' => 'Họ tên',
	'app_email' => 'Email',
	'app_password' => 'Mật khẩu',
	'app_remember_token' => 'Lưu mã',
	'app_permissions' => 'Quyền',
	'app_user_actions' => 'Hành động người dùng',
	'app_action' => 'Hành động',
	'app_action_model' => 'Mô hình hành động',
	'app_action_id' => 'Hành động id',
	'app_time' => 'Thời gian',
	'app_campaign' => 'Chiến dịch',
	'app_campaigns' => 'Chiến dịch',
	'app_description' => 'Mô tả',
	'app_valid_from' => 'Có hiệu lực từ',
	'app_valid_to' => 'Có hiệu lực tới',
	'app_discount_amount' => 'Số tiền giảm giá',
	'app_discount_percent' => 'Phần trăm chiết khấu',
	'app_coupons_amount' => 'Số lượng phiếu giảm giá',
	'app_coupons' => 'Phiếu giảm giá',
	'app_code' => 'Mã',
	'app_redeem_time' => 'Đổi thời gian',
	'app_coupon_management' => 'Quản lý phiếu giảm giá',
	'app_time_management' => 'Quản lý thời gian',
	'app_projects' => 'Dự án',
	'app_reports' => 'Báo cáo',
	'app_time_entries' => 'Mục thời gian',
	'app_work_type' => 'Loại công việc',
	'app_work_types' => 'Loại công việc',
	'app_project' => 'Dự án',
	'app_start_time' => 'Thời gian bắt đầu',
	'app_end_time' => 'Thời gian kết thúc',
	'app_expense_category' => 'Danh mục chi phí',
	'app_expense_categories' => 'Danh mục chi phí',
	'app_expense_management' => 'Quản lý chi tiêu',
	'app_expenses' => 'Chi phí',
	'app_expense' => 'Chi tiêu',
	'app_entry_date' => 'Ngày nhập',
	'app_amount' => 'Số tiền',
	'app_income_categories' => 'Loại thu nhập',
	'app_monthly_report' => 'Báo cáo hàng tháng',
	'app_companies' => 'Các công ty',
	'app_company_name' => 'Tên công ty',
	'app_address' => 'Địa chỉ',
	'app_website' => 'Website',
	'app_contact_management' => 'Quản lý liên hệ',
	'app_contacts' => 'Liên hệ',
	'app_company' => 'Công ty',
	'app_first_name' => 'Tên',
	'app_last_name' => 'Họ',
	'app_phone' => 'Số điện thoại',
	'app_phone1' => 'Số điện thoại 1',
	'app_phone2' => 'Số điện thoại 2',
	'app_skype' => 'Skype',
	'app_photo' => 'Ảnh (max 8mb)',
	'app_category_name' => 'Tên danh mục',
	'app_product_management' => 'Quản lý sản phẩm',
	'app_products' => 'Sản phẩm',
	'app_product_name' => 'Tên sản phẩm',
	'app_price' => 'Giá',
	'app_tags' => 'Tags',
	'app_tag' => 'Tag',
	'app_photo1' => 'Ảnh 1',
	'app_photo2' => 'Ảnh 2',
	'app_photo3' => 'Ảnh 3',
	'app_calendar' => 'Lịch',
	'app_statuses' => 'Trạng thái',
	'app_task_management' => 'Quản lý công việc',
	'app_tasks' => 'Nhiệm vụ',
	'app_status' => 'Trạng thái',
	'app_attachment' => 'Tập tin đính kèm',
	'app_due_date' => 'Ngày đáo hạn',
	'app_assigned_to' => 'Phân công',
	'app_assets' => 'Tài sản',
	'app_asset' => 'Tài sản',
	'app_serial_number' => 'Số sê ri',
	'app_location' => 'V trí',
	'app_locations' => 'Vị trí',
	'app_assigned_user' => 'Được chỉ định (người dùng)',
	'app_notes' => 'Ghi chú',
	'app_assets_history' => 'Assets history',
	'app_assets_management' => 'Quản lý tài sản',
	'app_slug' => 'Slug',
	'app_content_management' => 'Quản lý nội dung',
	'app_text' => 'Văn bản',
	'app_excerpt' => 'Đoạn trích',
	'app_featured_image' => 'Ảnh nổi bật',
	'app_pages' => 'Trang',
	'app_axis' => 'Trục',
	'app_show' => 'Hiển thị',
	'app_group_by' => 'Nhóm lại theo',
	'app_chart_type' => 'Loại biểu đồ',
	'app_create_new_report' => 'Tạo mới báo cáo',
	'app_no_reports_yet' => 'Chưa có báo cáo nào.',
	'app_created_at' => 'Đã tạo lúc',
	'app_updated_at' => 'Cập nhật lúc',
	'app_deleted_at' => 'Đã xóa lúc',
	'app_reports_x_axis_field' => 'Trục X - vui lòng chọn một trong các trường ngày/giờ',
	'app_reports_y_axis_field' => 'Trục Y - vui lòng chọn một trong các trường số',
	'app_select_crud_placeholder' => 'Vui lòng chọn một trong những CRUD của bạn',
	'app_select_dt_placeholder' => 'Vui lòng chọn một trong các trường ngày/giờ',
	'app_aggregate_function_use' => 'Hàm tổng hợp để sử dụng',
	'app_x_axis_group_by' => 'Nhóm trục X',
	'app_x_axis_field' => 'Trường trục X (ngày/giờ)',
	'app_y_axis_field' => 'Trường trục Y',
	'app_integer_float_placeholder' => 'Vui lòng chọn một trong các trường số nguyên/số thực',
	'app_change_notifications_field_1_label' => 'Gửi thông báo qua email cho người dùng',
	'app_change_notifications_field_2_label' => 'Khi vào CRUD',
	'app_select_users_placeholder' => 'Vui lòng chọn một trong những người dùng của bạn',
	'app_is_created' => 'Tạo thành công',
	'app_is_updated' => 'Cập nhật thành công',
	'app_is_deleted' => 'Xóa thành công',
	'app_notifications' => 'Thông báo',
	'app_notify_user' => 'Thông báo cho người dùng',
	'app_when_crud' => 'Khi CRUD',
	'app_create_new_notification' => 'Tạo thông báo mới',
	'app_stripe_transactions' => 'Giao dịch sọc',
	'app_upgrade_to_premium' => 'Nâng cấp trả phí',
	'app_messages' => 'Tin nhắn',
	'app_you_have_no_messages' => 'Bạn có tin nhắn.',
	'app_all_messages' => 'Tất cả tin nhắn',
	'app_new_message' => 'Tin nhắn mới',
	'app_outbox' => 'Hộp thư đi',
	'app_inbox' => 'Hộp thư đến',
	'app_recipient' => 'Người nhận',
	'app_subject' => 'Tiêu đề',
	'app_message' => 'Tin nhắn',
	'app_send' => 'Gửi',
	'app_reply' => 'Trả lời',
	'app_calendar_sources' => 'Nguồn lịch',
	'app_new_calendar_source' => 'Tạo nguồn lịch mới',
	'app_crud_title' => 'Crud tiêu đề',
	'app_crud_date_field' => 'Crud trường ngày',
	'app_prefix' => 'Lời nói đầu',
	'app_label_field' => 'Trường nhãn dán',
	'app_suffix' => 'Sufix',
	'app_no_calendar_sources' => 'Chưa có nguồn lịch nào.',
	'app_crud_event_field' => 'Trường nhãn sự kiện',
	'app_create_new_calendar_source' => 'Tạo nguồn lịch mới',
	'app_edit_calendar_source' => 'Chỉnh sửa nguồn lịch',
	'app_client_management' => 'Quản lý khách hàng',
	'app_client_management_settings' => 'Cài đặt quản lý khách hàng',
	'app_country' => 'Quốc gia',
	'app_client_status' => 'Tình trạng khách hàng',
	'app_clients' => 'Khách hàng',
	'app_client_statuses' => 'Trạng thái khách hàng',
	'app_currencies' => 'Tiền tệ',
	'app_main_currency' => 'Tiền tệ chính',
	'app_documents' => 'Tài liệu',
	'app_file' => 'File',
	'app_income_source' => 'Nguồn thu nhập',
	'app_income_sources' => 'Nguồn thu nhập',
	'app_fee_percent' => 'Phần trăm phí',
	'app_note_text' => 'Ghi chú văn bản',
	'app_client' => 'Khách hàng',
	'app_start_date' => 'Ngày bắt đầu',
	'app_budget' => 'Ngân sách',
	'app_project_status' => 'Tình trạng của dự án',
	'app_project_statuses' => 'Trạng thái dự án',
	'app_transactions' => 'Giao dịch',
	'app_transaction_types' => 'Các loại giao dịch',
	'app_transaction_type' => 'Các loại giao dịch',
	'app_transaction_date' => 'Ngày giao dịch',
	'app_currency' => 'Tiền tệ',
	'app_current_password' => 'Mật khẩu hiện tại',
	'app_new_password' => 'Mật khẩu mới',
	'app_password_confirm' => 'Xác nhận mật khẩu mới',
	'app_dashboard_text' => 'Bạn đã đăng nhập!',
	'app_forgot_password' => 'Quên mật khẩu?',
	'app_remember_me' => 'Lưu mật khẩu',
	'app_login' => 'Đăng nhập',
	'app_change_password' => 'Thay đổi mật khẩu',
	'app_csv' => 'CSV',
	'app_print' => 'In',
	'app_excel' => 'Excel',
	'app_copy' => 'Copy',
	'app_colvis' => 'Hiển thị cột',
	'app_pdf' => 'PDF',
	'app_reset_password' => 'Đặt lại mật khẩu',
	'app_reset_password_woops' => '<strong>Rất tiếc!</strong> Có vấn đề với dữ liệu nhập:',
	'app_email_line1' => 'Bạn đang nhận được email này vì chúng tôi đã nhận được yêu cầu đặt lại mật khẩu cho tài khoản của bạn.',
	'app_email_line2' => 'Nếu bạn không yêu cầu đặt lại mật khẩu, không cần thực hiện thêm hành động nào.',
	'app_email_greet' => 'Xin chào',
	'app_email_regards' => 'Trân trọng',
	'app_confirm_password' => 'Xác nhận mật khẩu',
	'app_if_you_are_having_trouble' => 'Nếu bạn gặp sự cố khi nhấp vào',
	'app_copy_paste_url_bellow' => 'nút, sao chép và dán URL bên dưới vào trình duyệt web của bạn:',
	'app_please_select' => 'Vui lòng chọn',
	'app_register' => 'Đăng ký',
	'app_registration' => 'Đăng ký làm chủ nhà',
	'app_not_approved_title' => 'Bạn không được chấp thuận',
	'app_not_approved_p' => 'Tài khoản của bạn vẫn chưa được quản trị viên chấp thuận. Xin hãy kiên nhẫn và thử lại sau.',
	'app_there_were_problems_with_input' => 'Có vấn đề với đầu vào',
	'app_whoops' => 'Rất tiếc!',
	'app_file_contains_header_row' => 'File chứa hàng tiêu đề?',
	'app_csvImport' => 'CSV nhập vào',
	'app_csv_file_to_import' => 'CSV file to nhập vào',
	'app_parse_csv' => 'Phân tích CSV',
	'app_import_data' => 'Nhập vào dữ liệu',
	'app_imported_rows_to_table' => 'Đã nhập: hàng hàng đến: bảng bảng',
	'app_subscription-billing' => 'Đăng ký',
	'app_subscription-payments' => 'Thanh toán',
	'app_basic_crm' => 'Basic CRM',
	'app_customers' => 'Khách hàng',
	'app_customer' => 'Khách hàng',
	'global_title' => 'Chủ nhà',
];