import KUChecksum

nisit = input("Enter NisitID: ")

print('Valid:',KUChecksum.VerifyNisitID(nisit))
print('Checksum:',KUChecksum.GetNisitIDChecksum(nisit))
