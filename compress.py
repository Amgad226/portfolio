from PIL import Image
import os
import sys
def compress_image(image_path, output_quality=30, max_size_kb=200):
    if not os.path.exists(image_path):
        print("File does not exist.")
        return

    original_size = os.path.getsize(image_path) / 1024  
    img = Image.open(image_path)

    # Convert PNG to JPEG/WebP for better compression
    if img.mode in ("RGBA", "P"):
        img = img.convert("RGB")

    # Resize Image to Reduce File Size
    width, height = img.size
    scale_factor = (max_size_kb * 1024) / (original_size * 1024)
    new_width = int(width * scale_factor ** 0.5)
    new_height = int(height * scale_factor ** 0.5)

    # Resize only if needed
    if new_width < width and new_height < height:
        img = img.resize((new_width, new_height), Image.LANCZOS)

    # Save as WebP or JPEG
    compressed_path = image_path.rsplit(".", 1)[0] + "_compressed.webp"
    img.save(compressed_path, "webp", quality=output_quality)

    compressed_size = os.path.getsize(compressed_path) / 1024  # Convert to KB

    print(f"Original size: {round(original_size, 2)} KB")
    print(f"Compressed size: {round(compressed_size, 2)} KB")
    print(f"Compressed image saved at: {compressed_path}")

base_path ="public/assets/"
fullpath = base_path+input("Enter image sub path:"+base_path)
print(fullpath)
# for image in range(1,6):
compress_image(f"public/assets/personal-projects/gpsme/4.png", output_quality=80, max_size_kb=1024)
    