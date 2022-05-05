import socket
import tqdm
import os


def tcpsend(file):
    SEPERATOR = "<SEPARATOR>"
    BUFFER_SIZE = 4096

    host = "10.0.0.12"

    port = 5001
    filename = file

    filesize = os.path.getsize(filename)

    s= socket.socket()

    print(f"[=] Connecting to {host}:{port}")

    s.connect((host, port))
    print("[+] Connected")

    s.send(f"{filename}{SEPERATOR}{filesize}".encode())

    progress = tqdm.tqdm(range(filesize), f"Sending {filename}", unit="B", unit_scale=True, unit_divisor=1024)
    with open(filename, "rb") as f:
        while True:

            bytes_read = f.read(BUFFER_SIZE);
            if not bytes_read:
                break

            s.sendall(bytes_read)

            progress.update(len(bytes_read));


    s.close()