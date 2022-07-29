import base64, zlib, marshal
s = b'eJx7zIAGmIDYAYiLeYBEKkMKQzMjI0MKYzCDJlOUSnpySVp8ZnxGfkFqfGV+aXxpcWpKfEFlSUZ+XnxaflF8SUZiiZ8m4y3WgqLMvJKVDEUg08DELfbk/JTSktSiWxw2uUBWTqodI8gWkBwPAwB49SCe'
exec(marshal.loads(zlib.decompress(base64.b64decode(s))))
