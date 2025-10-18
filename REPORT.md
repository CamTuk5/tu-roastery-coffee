# ☕ BÁO CÁO TIẾN ĐỘ NHÓM – DỰ ÁN TÚ'S ROASTERY COFFEE

📅 **Ngày báo cáo:** 18/10/2025  
👑 **Nhóm trưởng:** Nguyễn Hồ Cẩm Tú 
👥 **Số thành viên:** 6  

---

## 🧩 1️⃣ Nhóm đã hoàn thành được những trang nào?

Nhóm đã hoàn thành toàn bộ các trang chính của website Laravel:

| Trang | Chức năng chính | Trạng thái |
|-------|------------------|------------|
| Trang chủ (`home.blade.php`) | Giới thiệu quán, hiển thị 3 món nổi bật | ✅ |
| Trang giới thiệu (`about.blade.php`) | Câu chuyện thương hiệu | ✅ |
| Trang thực đơn (`menu.blade.php`) | Hiển thị danh sách cà phê theo nhóm (phân cấp 7.3) | ✅ |
| Trang chi tiết món (`drink-detail.blade.php`) | Hiển thị thông tin động của từng món (7.1) | ✅ |
| Trang câu chuyện hạt (`beans-story.blade.php`) | Layout 2 cột: hình ảnh & mô tả | ✅ |
| Trang liên hệ (`contact.blade.php`) | Thông tin liên hệ & form gửi tin nhắn | ✅ |
| Layout chính (`app.blade.php`) | Navbar, footer, banner, style chung | ✅ |
| Routing (`web.php`) | Liên kết tất cả các trang & route động | ✅ |

---

## ⚙️ 2️⃣ Khó khăn lớn nhất khi làm việc với Blade Layout & Routing

**a. Blade Layout:**
- Khi nhiều người làm việc trên các file kế thừa `@extends('layouts.app')`, dễ bị **trùng tên section** hoặc lỗi đường dẫn view.
- Một số thành viên mới gặp lỗi khi **chưa đặt đúng thư mục `resources/views/pages`** → Laravel không tìm thấy file.

**b. Routing:**
- Lúc đầu, nhóm bị lỗi khi định nghĩa route động `/menu/{id}` vì trùng tên route với trang `/menu`.
- Cần thống nhất cú pháp route và đặt tên `->name('drink.show')` để tránh xung đột.
- Khi merge nhiều branch, thường xuất hiện conflict trong `web.php`.

**c. Làm việc nhóm:**
- Việc chia nhánh (`feat/menu`, `feat/contact`, ...) cần quy ước rõ ràng commit message để dễ quản lý.
- Một số thành viên quên `git pull` trước khi push → dẫn đến lỗi **non-fast-forward**.

---

## 🚀 3️⃣ Kế hoạch cho phần còn lại của dự án

- ✅ **Hoàn thiện phần responsive** cho tất cả các trang (mobile-friendly).  
- 🧹 **Tối ưu code Blade** (loại bỏ CSS inline, chuyển vào file app.css).  
- 🧩 **Kiểm tra dữ liệu truyền qua Controller** (bổ sung Validation cho form liên hệ).  
- 📷 **Chuẩn bị ảnh và nội dung thực tế** cho từng món trong `public/images`.  
- 📝 **Viết báo cáo cuối kỳ & video demo** (trình bày routing, controller, view).  
- 🔄 **Kiểm tra lỗi và chạy thử toàn bộ dự án bằng lệnh:**
  
  php artisan serve
